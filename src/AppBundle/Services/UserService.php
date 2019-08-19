<?php
namespace AppBundle\Services;

use AppBundle\Entity\User;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class UserService
{
    private $tokenStorage;
    private $objectManager;

    /**
     * @param $tokenStorage
     */
    public function __construct(TokenStorageInterface $tokenStorage, ObjectManager $manager)
    {
        $this->tokenStorage = $tokenStorage;
        $this->objectManager = $manager;
    }

    public function getCurrentUser()
    {
        return $this->tokenStorage->getToken()->getUser();
    }

    public function getUserIdByEmail($email)
    {
        $repository = $this->objectManager->getRepository(User::class);

        return $repository->findOneBy(['email' => $email]);
    }
}