<?php
/**
 * Created by PhpStorm.
 * User: patrick
 * Date: 10/01/19
 * Time: 17:23
 */

namespace App\Repository;


use App\Domain\Models\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;


class ArticleRepository extends ServiceEntityRepository
{
    /**
     * ArticleRepository constructor.
     *
     * @param ManagerRegistry $registry
     * @param string $entityClass
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
    }

    // /**
    //  * @return Article[] Returns an array of Article objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Article
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}