<?php
namespace App\Controller;

use App\Repository\FriendshipRepository;
use App\Entity\Users;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class FriendController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/friends', name: 'app_friends')]
    public function showFriends(FriendshipRepository $friendshipRepository, UsersRepository $userRepository): Response
    {
        // Récupérer l'utilisateur connecté
    $user = $this->getUser();

    // Récupérer la liste des amis de l'utilisateur
    $friends = $friendshipRepository->findFriends($user->getId());

    $usernames = [];
    foreach ($friends as $friend) {
        // Determiner l'user ID
        $friendId = ($friend->getUser1() === $user->getId()) ? $friend->getUser2() : $friend->getUser1();
        // Récupérer depuis le Repository
        $usernames[$friendId] = $userRepository->find($friendId)->getUsername();
    }
    

    return $this->render('friend/show_friends.html.twig', [
        'friends' => $friends,
        'usernames' => $usernames,
    ]);

    }

    

    #[Route('/add-friend', name: 'app_add_friend')]
    public function addFriend(Request $request, FriendshipRepository $friendshipRepository): Response
    {
        if ($request->isMethod('POST')) {
            $username = $request->request->get('username');

            // Récupérer l'utilisateur connecté
            $user = $this->getUser();

            // Récupérer l'utilisateur correspondant au nom d'utilisateur saisi
            $friend = $this->entityManager->getRepository(Users::class)->findOneBy(['username' => $username]);

            if (!$friend) {
                return $this->render('friend/add_friend.html.twig', ['errorMessage' => 'Aucun utilisateur trouvé avec ce nom d\'utilisateur.']);
            }

            // Ajouter un ami
            $friendship = $friendshipRepository->addFriend($user->getId(), $friend->getId());

            if ($friendship) {
                $this->addFlash('success', 'Demande d\'ami envoyée avec succès.');
                return $this->redirectToRoute('app_friends');
            } else {
                return $this->render('friend/add_friend.html.twig', ['errorMessage' => 'Une erreur s\'est produite lors de l\'ajout de l\'ami.']);
            }
        }

        return $this->render('friend/add_friend.html.twig');
    }

    #[Route('/pending-friend-requests', name: 'app_pending_friend_requests')]
    public function pendingFriendRequests(FriendshipRepository $friendshipRepository, UsersRepository $userRepository): Response
    {
        $user = $this->getUser();
        $pendingRequests = $friendshipRepository->findPendingFriendRequests($user->getId());
    
        // Créer un tableau pour stocker les noms d'utilisateur
        $usernames = [];
        foreach ($pendingRequests as $request) {
            // Obtenez l'utilisateur qui a envoyé la demande et stockez son nom d'utilisateur
            $usernames[$request->getUser1()] = $userRepository->find($request->getUser1())->getUsername();
        }
    
        return $this->render('friend/pending_friend_requests.html.twig', [
            'pendingRequests' => $pendingRequests,
            'usernames' => $usernames,
        ]);
    }
    

#[Route('/accept-friend-request/{id}', name: 'app_accept_friend_request')]
public function acceptFriendRequest(FriendshipRepository $friendshipRepository, $id): Response
{
    $user = $this->getUser();
    
    $result = $friendshipRepository->acceptFriendRequest($id, $user->getId());
    
    if ($result) {
        $this->addFlash('success', 'Demande d\'ami acceptée avec succès.');
    } else {
        $this->addFlash('error', 'Impossible d\'accepter la demande d\'ami ou la demande n\'existe pas.');
    }

    return $this->redirectToRoute('app_pending_friend_requests');
}



#[Route('/decline-friend-request/{id}', name: 'app_decline_friend_request')]
public function declineFriendRequest(FriendshipRepository $friendshipRepository, $id): Response
{
    $user = $this->getUser();

    $result = $friendshipRepository->declineFriendRequest($id, $user->getId());
    
    if ($result) {
        $this->addFlash('success', 'Demande d\'ami refusée avec succès.');
    } else {
        $this->addFlash('error', 'Impossible de refuser la demande d\'ami ou la demande n\'existe pas.');
    }

    return $this->redirectToRoute('app_pending_friend_requests');
}


    




}
?>