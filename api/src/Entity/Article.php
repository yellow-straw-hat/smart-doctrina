<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * An Article.
 *
 * @ORM\Entity
 */
#[ApiResource]
class Article
{
    /**
     * The id of this article.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * The reference of this article (or null if doesn't have one).
     *
     * @ORM\Column(nullable=true)
     */
    public ?string $reference = null;

    /**
     * The name of this article.
     *
     * @ORM\Column
     */
    public string $name = '';

    /**
     * The content of this article.
     *
     * @ORM\Column(type="text")
     */
    public string $content = '';

    /**
     * Is this article a draft.
     *
     * @ORM\Column
     */
    public string $draft = 'false';

    /**
     * The publication date of this article.
     *
     * @ORM\Column(type="datetime_immutable")
     */
    public ?\DateTimeInterface $createdAt = null;

    /**
     * The date when the article is updated.
     *
     * @ORM\Column(type="datetime_immutable")
     */
    public ?\DateTimeInterface $updatedAt = null;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
