<?php

namespace App\Event;


use App\Domain\Interfaces\UserInterface;
use Symfony\Component\EventDispatcher\Event;

class UserCreatedEvent extends Event
{
    const NAME = 'user.created';
    /**
     * @var UserInterface
     */
    private $user;

    /**
     * UserCreatedEvent constructor.
     * @param UserInterface $user
     */
    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    /**
     * @return UserInterface
     */
    public function getUser(): UserInterface
    {
        return $this->user;
    }


}