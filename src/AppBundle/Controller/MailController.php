<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Mail;
use AppBundle\Forms\MailType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MailController extends Controller
{
    /**
     * @Route("mail", name="vsya_pochta")
     */
    public function indexAction(Request $request)
    {
        $mails = $this->get('mail_service');

        // replace this example code with whatever you need
        return $this->render('default/vsya_pochta.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
            'mails' => $mails->getAllInboxMailsForCurrentUser(),
        ]);
    }

    /**
     * @Route("mail/compose", name="compose")
     */
    public function composeAction(Request $request)
    {
        $mail = new Mail();

        $form = $this->createForm(MailType::class, $mail);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            /** @var \AppBundle\Entity\Mail $mail */
            $mail = $form->getData();

            /** @var UploadedFile $file */
            $file = $mail->getFile();

            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();

            // moves the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('files_directory'),
                $fileName
            );

            // updates the 'brochure' property to store the PDF file name
            // instead of its contents
            $mail->setFile($fileName);

            $userService = $this->getUsers();
            $mail->setFrom($userService->getCurrentUser());
            $mail->setTo($userService->getUserIdByEmail($mail->getTo()));

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($mail);
            $entityManager->flush();

            return $this->redirectToRoute('vsya_pochta');
        }

        // replace this example code with whatever you need
        return $this->render('default/compose.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("mail/sent", name="mail_sent")
     */
    public function sentAction(Request $request)
    {
        $mails = $this->get('mail_service');

        // replace this example code with whatever you need
        return $this->render('default/sent.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
            'mails' => $mails->getAllSendMailsForCurrentUser(),
        ]);
    }

    /**
     * @Route("mail/avtorizaciya", name="avtorizaciya")
     */
    public function avtorizaciyaAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/avtorizaciya.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("mail/korzina", name="korzina")
     */
    public function korzinaAction(Request $request)
    {
        $mails = $this->get('mail_service');

        // replace this example code with whatever you need
        return $this->render('default/korzina.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
            'mails' => $mails->getAllDeletedMailsForCurrentUser(),
        ]);
    }

    /**
     * @Route("mail/delete/{id}", requirements={"id" = "\d+"}, name="mail_delete")
     */
    public function deleteAction(Request $request, $id = 1)
    {
        $mails = $this->get('mail_service');
        $mails->delete($id);

        $referer = $request->headers->get('referer');

        return $this->redirect($referer);
    }

    /**
     * @Route("mail/download/{filename}", name="download_file")
     */
    public function downloadAction($filename)
    {
        $path = $this->getParameter('files_directory');
        $content = file_get_contents($path. '/' . $filename);

        $response = new Response();

        //set headers
        $response->headers->set('Content-Type', 'mime/type');
        $response->headers->set('Content-Disposition', 'attachment;filename="'.$filename);

        $response->setContent($content);
        return $response;
    }

    private function getUsers()
    {
        return $this->get('users_service');
    }

    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }
}
