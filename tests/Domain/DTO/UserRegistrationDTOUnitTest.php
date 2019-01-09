<?php
/**
 * Created by PhpStorm.
 * User: patrick
 * Date: 09/01/19
 * Time: 15:23
 */

namespace App\Tests\Domain\DTO;


use PHPUnit\Framework\TestCase;

class UserRegistrationDTOUnitTest extends TestCase
{
    public function testItImplementsInterface()
    {
        $dto = new RegistrationDTO();
    }
}