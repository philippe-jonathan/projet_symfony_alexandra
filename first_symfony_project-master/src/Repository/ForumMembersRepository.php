<?php

namespace App\Repository;

use App\Entity\ForumMembers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ForumMembers|null find($id, $lockMode = null, $lockVersion = null)
 * @method ForumMembers|null findOneBy(array $criteria, array $orderBy = null)
 * @method ForumMembers[]    findAll()
 * @method ForumMembers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ForumMembersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ForumMembers::class);
    }

    // /**
    //  * @return ForumMembers[] Returns an array of ForumMembers objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ForumMembers
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
