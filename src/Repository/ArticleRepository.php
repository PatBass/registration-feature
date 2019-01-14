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

    public function save(Article $article)
    {
        $this->_em->persist($article);
        $this->_em->flush();
    }

    public function remove(Article $article)
    {
        if ($article) {
            $this->_em->remove($article);
            $this->_em->flush();
        }

    }
}