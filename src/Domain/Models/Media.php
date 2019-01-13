<?php


namespace App\Domain\Models;


use App\Domain\Interfaces\MediaInterface;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

/**
 * Class Media
 *
 * @author Patrick Bassoukissa
 *
 * @ORM\Entity(repositoryClass="App\Repository\MediaRepository")
 * @ORM\Table(name="registration_media")
 */
class Media implements MediaInterface
{
    /**
     * @var UuidInterface
     * @ORM\Id()
     * @ORM\Column(type="uuid")
     */
    private $id;

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
     * @param UuidInterface $id
     * @param string $type
     * @param string $name
     * @param string $publicUrl
     */
    public function __construct(UuidInterface $id, string $type, string $name, string $publicUrl)
    {
        $this->id = Uuid::uuid4();
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