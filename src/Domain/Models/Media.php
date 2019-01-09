<?php


namespace App\Domain\Models;


use App\Domain\Interfaces\MediaInterface;

/**
 * Class Media
 *
 * @package App\Domain\Models
 * @author Patrick Bassoukissa
 */
class Media implements MediaInterface
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $publicUrl;


    /**
     * Media constructor.
     *
     * @param string $type
     * @param string $name
     * @param string $publicUrl
     */
    public function __construct(string $type, string $name, string $publicUrl)
    {
        $this->type = $type;
        $this->name = $name;
        $this->publicUrl = $publicUrl;
    }

    /**
     * {@inheritdoc}
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function getPublicUrl(): string
    {
        return $this->publicUrl;
    }


}