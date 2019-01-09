<?php
/**
 * Created by PhpStorm.
 * User: patrick
 * Date: 07/01/19
 * Time: 16:36
 */

namespace App\Domain\Interfaces;


/**
 * Interface UserInterface
 *
 * @author Patrick Bassoukissa
 */
interface UserInterface
{
    /**
     * @return string
     */
    public function getUsername(): string ;

    /**
     * @return string
     */
    public function getEmail(): string ;

    /**
     * @return string
     */
    public function getPassword(): string ;

    /**
     * @return MediaInterface|null
     */
    public function getProfileImage(): ?MediaInterface;
}