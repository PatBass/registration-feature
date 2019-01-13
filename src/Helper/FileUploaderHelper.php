<?php
/**
 * Created by PhpStorm.
 * User: patrick
 * Date: 13/01/19
 * Time: 11:45
 */

namespace App\Helper;


class FileUploaderHelper
{
    /**
     * @var string
     */
    private $imageFolder;

    /**
     * FileUploaderHelper constructor.
     *
     * @param string $imageFolder
     */
    public function __construct(string $imageFolder)
    {
        $this->imageFolder = $imageFolder;
    }

    /**
     * @return string
     */
    public function getImageFolder(): string
    {
        return $this->imageFolder;
    }


}