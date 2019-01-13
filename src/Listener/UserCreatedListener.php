<?php

namespace App\Listener;


use App\Event\UserCreatedEvent;

class UserCreatedListener
{
    public function onUserCreated(UserCreatedEvent $event)
    {
        //Envoi d'un e-mail par exemple
        dump($event->getUser());
    }
}