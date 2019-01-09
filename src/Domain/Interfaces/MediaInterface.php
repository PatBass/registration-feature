<?php
/**
 * Created by PhpStorm.
 * User: patrick
 * Date: 08/01/19
 * Time: 11:30
 */

namespace App\Domain\Interfaces;


/**
 * Interface MediaInterface
 * @package App\Domain\Interfaces
 *
 * @author Patrick Bassoukissa
 */
interface MediaInterface
{
    /**
     * @return string
     */
    public function getType(): string ;

    /**
     * @return string
     */
    public function getName(): string;
}