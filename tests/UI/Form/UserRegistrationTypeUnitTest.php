<?php
/**
 * Created by PhpStorm.
 * User: patrick
 * Date: 08/01/19
 * Time: 15:21
 */

namespace App\Tests\UI\Form;


use App\UI\Form\Interfaces\UserRegistrationTypeInterface;
use App\UI\Form\UserRegistrationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Test\TypeTestCase;

class UserRegistrationTypeUnitTest extends TypeTestCase
{
    public function testItImplementsInterfaces()
    {
        $registrationType = new UserRegistrationType();
        static::assertInstanceOf(AbstractType::class, $registrationType);
        static::assertInstanceOf(UserRegistrationTypeInterface::class, $registrationType);
    }

    /**
     * @param sting $username
     * @param string $email
     * @param string $password
     *
     * @dataProvider provideTestData
     */
    public function testThisClassHandlesData(string $username, string $email, string $password)
    {
        $registrationTypeForm = $this->factory->create(UserRegistrationType::class);
        $registrationTypeForm->submit([
            "username" => $username,
            "email"    => $email,
            "password" => $password
        ]);
        static::assertTrue($registrationTypeForm->isSubmitted());
        static::assertTrue($registrationTypeForm->isValid());
        static::assertSame($username, $registrationTypeForm->getData()["username"]);
        static::assertSame($email, $registrationTypeForm->getData()["email"]);
        static::assertSame($password, $registrationTypeForm->getData()["password"]);
    }

    /**
     * @return \Generator
     */
    public function provideTestData()
    {
        yield array("toto", "toto@domain.com", "toto");
        yield array("toti", "toti@domain.com", "toti");
        yield array("tati", "tati@domain.com", "tati");
    }
}