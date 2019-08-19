<?php
namespace AppBundle\Services;

use AppBundle\Entity\Mail;
use AppBundle\Entity\User;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class MailService
{
    private $tokenStorage;
    private $objectManager;

    public function __construct(TokenStorageInterface $tokenStorage, ObjectManager $manager)
    {
        $this->objectManager = $manager;
        $this->tokenStorage = $tokenStorage;
    }

    public function getAllInboxMailsForCurrentUser()
    {
        $currentUser = $this->tokenStorage->getToken()->getUser();

        return $this->objectManager->getRepository(Mail::class)->findBy([
            'to' => $currentUser,
            'deleted' => 0,
        ]);
    }

    public function getAllDeletedMailsForCurrentUser()
    {
        $currentUser = $this->tokenStorage->getToken()->getUser();

        $output = [];
        $findBy = [
            'to' => $currentUser,
        ];

        $mails = $this->objectManager->getRepository(Mail::class)->findBy($findBy);

        foreach ($mails as $mail) {
            if ($currentUser === $mail->getTo() && $mail->isDeleted()) {
                $output[] = $mail;
            }

            if($currentUser === $mail->getFrom() && $mail->isStatus()) {
                $output[] = $mail;
            }
        }

        return $output;
    }

    public function getAllSendMailsForCurrentUser()
    {
        $currentUser = $this->tokenStorage->getToken()->getUser();

        return $this->objectManager->getRepository(Mail::class)->findBy([
            'from' => $currentUser,
            'status' => 0,
        ]);
    }

    public function delete(string $id)
    {
        /** @var Mail $mail */
        $mail = $this->objectManager->find(Mail::class, $id);

        /** @var User $currentUser */
        $currentUser = $this->tokenStorage->getToken()->getUser();

        if ($mail) {

            if ($currentUser === $mail->getTo()) {
                $mail->setDeleted(1);
            } elseif($currentUser === $mail->getFrom()) {
                $mail->setStatus(1);
            }

            $this->objectManager->persist($mail);
            $this->objectManager->flush();
        }
    }
}
