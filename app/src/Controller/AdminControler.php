<?php

namespace App\Controller;

use App\Entity\Word;
use App\Form\WordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminControler extends AbstractController
{
    #[Route('/admin/word', name: 'admin_word')]
    public function setWordOfTheDay(Request $request, EntityManagerInterface $entityManager)
    {
        $word = new Word();
        $form = $this->createForm(WordType::class, $word);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($word);
            $entityManager->flush();

            $this->addFlash('success', 'Le mot du jour a été défini.');

            return $this->redirectToRoute('admin_word');
        }

        return $this->render('admin/set_word.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

?>