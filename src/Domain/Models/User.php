<?php


namespace App\Domain\Models;


use App\Domain\Interfaces\MediaInterface;
use App\Domain\Interfaces\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

/**
 * Class User
 *
 * @author Patrick Bassoukissa
 *
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\Table(name="registration_user")
 */
class User implements UserInterface
{
    /**
     * @var UuidInterface
     * @ORM\Id()
     * @ORM\Column(type="uuid")
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var MediaInterface|null
     */
    private $profileImage = null;


    /**
     * User constructor.
     *
     * @param UuidInterface $id
     * @param string $username
     * @param string $email
     * @param string $password
     * @param MediaInterface|null
     */
    public function __construct(UuidInterface $id,string $username, string $email, string $password, MediaInterface $profileImage = null)
    {
        $this->id = Uuid::uuid4();
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->profileImage = $profileImage;
    }

    /**
     * {@inheritdoc}
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * {@inheritdoc}
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * {@inheritdoc}
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * {@inheritdoc}
     */
    public function getProfileImage(): ?MediaInterface
    {
        return $this->profileImage;
    }

}