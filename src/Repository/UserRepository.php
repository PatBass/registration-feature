<?php


namespace App\Repository;


use App\Domain\Models\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;

/**
 * Class UserRepository
 *
 * @author Patrick Bassoukissa
 */
class UserRepository extends ServiceEntityRepository implements UserLoaderInterface
{


    /**
     * UserRepository constructor.
     *
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * @param string $username
     * @return mixed|\Symfony\Component\Security\Core\User\UserInterface|null
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function loadUserByUsername($username)
    {
        return $this
            ->createQueryBuilder("user")
            ->where("user.username = :username OR user.phoneNumber = :phoneNumber")
            ->setParameter(':username', $username)
            ->setParameter(':phoneNumber', $phoneNumber)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
}