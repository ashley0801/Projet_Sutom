<?php

namespace App\Entity;

use App\Repository\LikeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LikeRepository::class)]
#[ORM\Table(name: '`like`')]
class Like
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'likes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?users $user_id = null;

    #[ORM\ManyToOne(inversedBy: 'likes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?word $word_id = null;

    #[ORM\Column(nullable: true)]
    private ?bool $likeword = null;

    #[ORM\Column(nullable: true)]
    private ?int $rate = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?users
    {
        return $this->user_id;
    }

    public function setUserId(?users $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getWordId(): ?word
    {
        return $this->word_id;
    }

    public function setWordId(?word $word_id): self
    {
        $this->word_id = $word_id;

        return $this;
    }

    public function isLikeword(): ?bool
    {
        return $this->likeword;
    }

    public function setLikeword(?bool $likeword): self
    {
        $this->likeword = $likeword;

        return $this;
    }

    public function getRate(): ?int
    {
        return $this->rate;
    }

    public function setRate(?int $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

 
}
