<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * A comment of an article.
 *
 * @ORM\Entity
 */
#[ApiResource]
class Comment
{
    /**
     * The id of this comment.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * The content of the comment.
     *
     * @ORM\Column(type="text")
     */
    public string $content = '';

    /**
     * The date of publication of this comment.
     *
     * @ORM\Column(type="datetime_immutable")
     */
    public ?\DateTimeInterface $createdAt = null;

    /**
     * The date when the comment is updated.
     *
     * @ORM\Column(type="datetime_immutable")
     */
    public ?\DateTimeInterface $updatedAt = null;

    /**
     * The article this comment is about.
     *
     * @ORM\ManyToOne(targetEntity="Article", inversedBy="comments")
     */
    public ?Article $article = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
