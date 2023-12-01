<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\ModificationProfilType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class GestionController extends AbstractController
{
    private $entityManager;
    private $security;
    private $tokenStorage;

    public function __construct(EntityManagerInterface $entityManager, Security $security, TokenStorageInterface $tokenStorage)
    {
        $this->entityManager = $entityManager;
        $this->security = $security;
        $this->tokenStorage = $tokenStorage;
    }

    #[Route('/gestion-profil', name: 'gestion_profil')]
    public function gestionProfil(): Response
    {
        $user = $this->getUser();
        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }

        return $this->render('gestion-profil/gestion_profil.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/user/avatar/{id}', name: 'user_avatar')]
    public function userAvatar(Users $user): Response
    {
        if (!$user->getAvatar()) {
            throw new AccessDeniedException('Aucun avatar n\'est disponible pour cet utilisateur.');
        }

        // Récupérer le nom du fichier avatar
        $avatarFilename = $user->getAvatar();

        // Construire le chemin vers le fichier d'avatar
        $avatarPath = $this->getParameter('avatars_directory') . '/' . $avatarFilename;

        // Vérifier si le fichier existe et lire le contenu
        if (file_exists($avatarPath)) {
            $avatarContent = file_get_contents($avatarPath);
        } else {
            throw new AccessDeniedException('Le fichier d\'avatar n\'existe pas.');
        }

        // Détection du type de l'image
        $finfo = new \finfo(FILEINFO_MIME_TYPE);
        $mimeType = $finfo->buffer($avatarContent);

        // Envoyer la réponse avec le contenu de l'avatar et le type MIME approprié
        return new Response($avatarContent, 200, ['Content-Type' => $mimeType]);
    }

    #[Route('/modification-profil', name: 'modification_profil')]
    public function modificationProfil(Request $request): Response
    {
        $user = $this->getUser();
        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }

        $form = $this->createForm(ModificationProfilType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Obtenez la valeur de l'avatar sélectionné du formulaire.
            $avatarFilename = $form->get('avatar')->getData();
            
          
            $user->setAvatar($avatarFilename);

            $this->entityManager->flush();
            $this->addFlash('success', 'Votre profil a été mis à jour avec succès.');

            return $this->redirectToRoute('gestion_profil');
        }

        return $this->render('gestion-profil/modification_profil.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/delete-account', name: 'delete_account')]
    public function deleteAccount(): Response
    {
        $user = $this->getUser();
        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }

        try {
            $this->tokenStorage->setToken(null);
            $this->entityManager->remove($user);
            $this->entityManager->flush();
            $this->addFlash('success', 'Votre compte a été supprimé avec succès.');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Une erreur est survenue lors de la suppression du compte.');
        }

        return $this->redirectToRoute('app_login');
    }
}
