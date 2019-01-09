<?php
/**
 * Created by PhpStorm.
 * User: patrick
 * Date: 07/01/19
 * Time: 16:32
 */

namespace App\Tests\Domain\Models;


use App\Domain\Interfaces\MediaInterface;
use App\Domain\Interfaces\UserInterface;
use App\Domain\Models\User;
use PHPUnit\Framework\TestCase;

/**
 * Class UserUnitTest
 * @package App\Tests\Domain\Models
 */
final class UserUnitTest extends TestCase
{

    /**
     * @param string $username
     * @param string $email
     * @param string $password
     *
     * @dataProvider provideUserData
     */
    public function testUserExistsAndImplementsInterface(string $username, string $email, string $password)
    {
        $user = new User($username, $email, $password);
        static::assertInstanceOf(UserInterface::class, $user);
        static::assertSame($user->getUsername(), $username);
        static::assertSame($user->getEmail(), $email);
        static::assertSame($user->getPassword(), $password);
        static::assertNull($user->getProfileImage());
    }

    /**
     * @param string $username
     * @param string $email
     * @param string $password
     *
     * @dataProvider provideUserData
     */
    public function testProfileImageCreation(string $username, string $email, string $password)
    {
        $profileImage = $this->createMock(MediaInterface::class);

        $user = new User($username, $email, $password, $profileImage);
        static::assertInstanceOf(MediaInterface::class, $user->getProfileImage());
    }

    /**
     * @return \Generator
     */
    public function provideUserData()
    {
        yield array("toto", "toto@gmail.com", "toto");
        yield array("tito", "tito@gmail.com", "tito");
        yield array("tato", "tato@gmail.com", "tato");
    }
}