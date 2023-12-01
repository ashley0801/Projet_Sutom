<?php
namespace App\Controller;

use App\Entity\GameState;
use App\Entity\Like;
use App\Repository\WordRepository;
use App\Repository\LikeRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use App\Repository\FriendshipRepository;
use Doctrine\ORM\EntityManagerInterface;


class GameController extends AbstractController
{
    #[Route('/game/{date}', name: 'game')]
    public function index(Request $request, ManagerRegistry $doctrine, WordRepository $wordRepository, LikeRepository $likeRepository, string $date): Response
    {
        $user = $this->getUser();
        if (!$user) {
            throw new AccessDeniedException('Vous devez être connecté pour accéder à cette page.');
        }

        $wordOfTheDay = $wordRepository->findOneBy(['date' => new \DateTime($date)]);
        if (!$wordOfTheDay) {
            throw $this->createNotFoundException('Aucun mot trouvé pour cette date.');
        }

        $entityManager = $doctrine->getManager();
        $gameState = $entityManager->getRepository(GameState::class)->findOneBy([
            'user' => $user,
            'word' => $wordOfTheDay
        ]);

        if (!$gameState) {
            $gameState = new GameState();
            $gameState->setUser($user);
            $gameState->setWord($wordOfTheDay);
            $gameState->setRemainingTries(8);
            $gameState->setAttempts([]);
            $gameState->setHasWon(false);
            $entityManager->persist($gameState);
            $entityManager->flush();
        }

        // Traitement des devinettes
        if ($request->isMethod('POST') && $request->request->has('guess')) {
            $userGuess = strtoupper(trim($request->request->get('guess')));
            $correctWord = $wordOfTheDay->getWord();

            if (strlen($userGuess) !== strlen($correctWord)) {
                $this->addFlash('error', 'Votre devinette doit comporter exactement ' . strlen($correctWord) . ' lettres.');
                return $this->redirectToRoute('game', ['date' => $date]);
            }

            $hints = $this->checkGuess($userGuess, $correctWord);
            $attempts = $gameState->getAttempts();
            $attempts[] = ['guess' => $userGuess, 'hints' => $hints];
            $gameState->setAttempts($attempts);
            $gameState->setRemainingTries($gameState->getRemainingTries() - 1);
            $gameState->setHasWon(!in_array('red', $hints) && !in_array('yellow', $hints));

            $entityManager->flush();

            if ($gameState->getHasWon()) {
                $this->addFlash('success', 'Félicitations, vous avez deviné le mot !');
                return $this->redirectToRoute('congratulations', ['date' => $date]);
            } elseif ($gameState->getRemainingTries() === 0) {
                $this->addFlash('error', 'Partie terminée, vous n’avez plus d’essais.');
                return $this->redirectToRoute('lost', ['date' => $date]);
            }
        }
        // Après le traitement de la devinette :
if ($gameState->getHasWon()) {
    // Rediriger vers la page de félicitations
    return $this->redirectToRoute('congratulations', ['date' => $date]);
} elseif ($gameState->getRemainingTries() === 0) {
    // Rediriger vers la page de défaite
    return $this->redirectToRoute('lost', ['date' => $date]);
}


    return $this->render('game/index.html.twig', [
        'gameState' => $gameState,
        'word' => $wordOfTheDay->getWord(),
        'date' => $date
    ]);

    }

    private function checkGuess(string $userGuess, string $correctWord): array {
        $hints = [];
        $correctWordArray = str_split(strtoupper($correctWord));
        $userGuessArray = str_split(strtoupper($userGuess));
        $checkedLetters = array_fill(0, strlen($correctWord), false);

        // Première passe pour les lettres correctes
        foreach ($userGuessArray as $i => $letter) {
            if ($letter === $correctWordArray[$i]) {
                $hints[$i] = 'green';
                $checkedLetters[$i] = true;
            }
        }

        // Deuxième passe pour les lettres mal placées
        foreach ($userGuessArray as $i => $letter) {
            if (!isset($hints[$i])) {
                $found = false;
                foreach ($correctWordArray as $j => $correctLetter) {
                    if ($letter === $correctLetter && !$checkedLetters[$j]) {
                        $hints[$i] = 'yellow';
                        $checkedLetters[$j] = true;
                        $found = true;
                        break;
                    }
                }
                if (!$found) {
                    $hints[$i] = 'red';
                }
            }
        }

        return $hints;
    }

    #[Route('/congratulations/{date}', name: 'congratulations')]
public function congratulations(Request $request, ManagerRegistry $doctrine, WordRepository $wordRepository, LikeRepository $likeRepository, string $date): Response {
    $user = $this->getUser();
    $entityManager = $doctrine->getManager();
    $wordOfTheDay = $wordRepository->findOneBy(['date' => new \DateTime($date)]);
     // Traitement pour le like et la note
        if ($request->isMethod('POST') && $request->request->has('like')) {
            $userId = $user->getId();
            $wordId = $wordOfTheDay->getId();
        
            // Vérifier si l'utilisateur a déjà liké le mot
            if (!$likeRepository->hasUserLikedWord($userId, $wordId)) {
                $like = new Like();
                $like->setUserId($user);
                $like->setWordId($wordOfTheDay);
                $like->setLikeword($request->request->get('like') === 'on');
                $like->setRate($request->request->get('rate'));
                $entityManager->persist($like);
                $entityManager->flush();
            } else {
                // Gérer le cas où l'utilisateur a déjà liké le mot
                $this->addFlash('error', 'Vous avez déjà liké ce mot.');
            }
        }
        
                // Récupération des statistiques de likes et notes
                $likesCount = $likeRepository->countLikesForWord($wordOfTheDay->getId());
                $averageRate = $likeRepository->averageRateForWord($wordOfTheDay->getId());
        
                return $this->render('game/congratulations.html.twig', [
                    'word' => $wordOfTheDay->getWord(),
                    'date' => $date,
                    'likesCount' => $likesCount,
                    'averageRate' => $averageRate
                ]);
}

#[Route('/lost/{date}', name: 'lost')]
public function lost(Request $request, ManagerRegistry $doctrine, WordRepository $wordRepository, LikeRepository $likeRepository, string $date): Response {
    $user = $this->getUser();
    $entityManager = $doctrine->getManager();
    $wordOfTheDay = $wordRepository->findOneBy(['date' => new \DateTime($date)]);
    // Traitement pour le like et la note
        if ($request->isMethod('POST') && $request->request->has('like')) {
            $userId = $user->getId();
            $wordId = $wordOfTheDay->getId();
        
            // Vérifier si l'utilisateur a déjà liké le mot
            if (!$likeRepository->hasUserLikedWord($userId, $wordId)) {
                $like = new Like();
                $like->setUserId($user);
                $like->setWordId($wordOfTheDay);
                $like->setLikeword($request->request->get('like') === 'on');
                $like->setRate($request->request->get('rate'));
                $entityManager->persist($like);
                $entityManager->flush();
            } else {
                // Gérer le cas où l'utilisateur a déjà liké le mot
                $this->addFlash('error', 'Vous avez déjà liké ce mot.');
            }
        }
        
                // Récupération des statistiques de likes et notes
                $likesCount = $likeRepository->countLikesForWord($wordOfTheDay->getId());
                $averageRate = $likeRepository->averageRateForWord($wordOfTheDay->getId());
        
                return $this->render('game/lost.html.twig', [
                    'word' => $wordOfTheDay->getWord(),
                    'date' => $date,
                    'likesCount' => $likesCount,
                    'averageRate' => $averageRate
                ]);
}


}  