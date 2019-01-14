<?php


namespace App\Domain\Models;


use Ramsey\Uuid\Uuid;
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
     * @ORM\Column(type="string", nullable=true)
     */
    private $title;

    /**
     * Article constructor.
     *
     * @param UuidInterface $id
     * @param $content
     * @param $title
     */
    public function __construct(UuidInterface $id, $content, $title)
    {
        $this->id = Uuid::uuid4();
        $this->content = $content;
        $this->title = $title;
    }


    /**
     * @return UuidInterface
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }


}