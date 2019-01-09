<?php


namespace App\Domain\Models;


use App\Domain\Interfaces\MediaInterface;
use App\Domain\Interfaces\UserInterface;

/**
 * Class User
 *
 * @author Patrick Bassoukissa
 */
class User implements UserInterface
{
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
     * @param string $username
     * @param string $email
     * @param string $password
     * @param MediaInterface|null
     */
    public function __construct(string $username, string $email, string $password, MediaInterface $profileImage = null)
    {
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