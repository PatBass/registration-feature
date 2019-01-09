<?php
/**
 * Created by PhpStorm.
 * User: patrick
 * Date: 08/01/19
 * Time: 15:21
 */

namespace App\Tests\UI\Form;


use App\UI\Form\UserRegistrationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Test\TypeTestCase;

class UserRegistrationTypeUnitTest extends TypeTestCase
{
    public function testItImplementsInterfaces()
    {
        $registrationType = new UserRegistrationType();
        static::assertInstanceOf(AbstractType::class, $registrationType);
        static::assertInstanceOf(AbstractType::class, $registrationType);
    }
}