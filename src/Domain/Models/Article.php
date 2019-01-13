<?php


namespace App\Domain\Models;


use Ramsey\Uuid\UuidInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Article
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 * @ORM\Table(name="registration_article")
 */
class Article
{
    /**
     * @var UuidInterface
     * @ORM\Id()
     * @ORM\Column(type="uuid")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $content;

    /**
     * @ORM\Column(type="guid", nullable=true)
     */
    private $uuid;

    /**
     * Article constructor.
     * @param $id
     * @param $content
     * @param $uuid
     */
    public function __construct($id, $content, $uuid)
    {
        $this->id = Uuid::uuid4();
        $this->content = $content;
        $this->uuid = $uuid;
    }

    /**
     * @return UuidInterface
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUuid()
    {
        return $this->uuid;
    }




    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }


}