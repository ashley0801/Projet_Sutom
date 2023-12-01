<?php


namespace App\Repository;

use App\Entity\Friendship;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class FriendshipRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Friendship::class);
    }

    // Récupérer la liste des amis d'un utilisateur
    public function findFriends($userId)
    {
        return $this->createQueryBuilder('f')
            ->where('f.user1 = :userId OR f.user2 = :userId')
            ->andWhere('f.status = :status')
            ->setParameter('userId', $userId)
            ->setParameter('status', 'accepted')
            ->getQuery()
            ->getResult();
    }

      /**
     * Récupérer la liste des amitiés acceptées pour un utilisateur spécifique.
     *
     * @param int $userId L'identifiant de l'utilisateur pour lequel récupérer les amitiés acceptées.
     * @return array La liste des amitiés acceptées.
     */
    public function findAcceptedFriendships($userId)
    {
        return $this->createQueryBuilder('f')
            ->where('(f.user1 = :userId OR f.user2 = :userId) AND f.status = :status')
            ->setParameter('userId', $userId)
            ->setParameter('status', 'accepted')
            ->getQuery()
            ->getResult();
    }
    // Ajouter un ami
    public function addFriend($user1, $user2)
    {
       
        // Vérifier si une amitié existe déjà entre ces deux utilisateurs
        $existingFriendship = $this->createQueryBuilder('f')
            ->where('(f.user1 = :user1 AND f.user2 = :user2) OR (f.user1 = :user2 AND f.user2 = :user1)')
            ->setParameter('user1', $user1)
            ->setParameter('user2', $user2)
            ->getQuery()
            ->getOneOrNullResult();

        if ($existingFriendship) {
            return null;
        }

        // Créer une nouvelle amitié avec le statut en attente
        $friendship = new Friendship();
        $friendship->setUser1($user1);
        $friendship->setUser2($user2);
        $friendship->setStatus('pending');

        $this->getEntityManager()->persist($friendship);
        $this->getEntityManager()->flush();

        return $friendship;
    }

    public function findPendingFriendRequests($userId)
{
    return $this->createQueryBuilder('f')
        ->where('f.user2 = :userId')
        ->andWhere('f.status = :status')
        ->setParameter('userId', $userId)
        ->setParameter('status', 'pending')
        ->getQuery()
        ->getResult();
}

public function acceptFriendRequest($friendshipId, $userId)
{
    $friendship = $this->find($friendshipId);

    if (!$friendship || $friendship->getUser2() != $userId || $friendship->getStatus() !== 'pending') {
        
        return false;
    }

    $friendship->setStatus('accepted');
    $this->_em->flush();

    return true;
}
public function declineFriendRequest($friendshipId, $userId)
{
    $friendship = $this->find($friendshipId);

    if (!$friendship || $friendship->getUser2() != $userId || $friendship->getStatus() !== 'pending') {
        return false;
    }

    $this->_em->remove($friendship);
    $this->_em->flush();

    return true;
}


}