<?php
namespace App\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Like;

class LikeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Like::class);
    }

    // Méthode pour compter le nombre total de likes pour un mot
    public function countLikesForWord($wordId)
    {
        return $this->createQueryBuilder('l')
            ->select('COUNT(l.id)')
            ->where('l.word_id = :wordId')
            ->andWhere('l.likeword = 1') // assuming 'likeword' is a boolean represented by 1 for true
            ->setParameter('wordId', $wordId)
            ->getQuery()
            ->getSingleScalarResult();
    }

    // Méthode pour calculer la moyenne des notes pour un mot
    public function averageRateForWord($wordId)
    {
        return $this->createQueryBuilder('l')
            ->select('AVG(l.rate) as averageRate')
            ->where('l.word_id = :wordId')
            ->setParameter('wordId', $wordId)
            ->getQuery()
            ->getSingleScalarResult();
    }

    // Méthode pour vérifier si un utilisateur a déjà liké un mot
public function hasUserLikedWord($userId, $wordId)
{
    return $this->createQueryBuilder('l')
        ->select('count(l.id)')
        ->where('l.word_id = :wordId')
        ->andWhere('l.user_id = :userId')
        ->setParameter('wordId', $wordId)
        ->setParameter('userId', $userId)
        ->getQuery()
        ->getSingleScalarResult() > 0;
}
}

?>