<?php

namespace App\Entity;

use App\Repository\GameStateRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Word;
use App\Entity\Users;

#[ORM\Entity(repositoryClass: GameStateRepository::class)]
class GameState
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'gameStates')]
    #[ORM\JoinColumn(nullable: false)]
    private ?users $user = null;

    #[ORM\ManyToOne(inversedBy: 'gameStates')]
    #[ORM\JoinColumn(nullable: false)]
    private ?word $word = null;

    #[ORM\Column(nullable: true)]
    private ?array $attempts = null;

    #[ORM\Column(nullable: true)]
    private ?int $remainingTries = null;

    #[ORM\Column(nullable: true)]
    private ?bool $hasWon = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?users
    {
        return $this->user;
    }

    public function setUser(?users $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getWord(): ?word
    {
        return $this->word;
    }

    public function setWord(?word $word): self
    {
        $this->word = $word;

        return $this;
    }

    public function getAttempts(): ?array
    {
        return $this->attempts;
    }

    public function setAttempts(?array $attempts): self
    {
        $this->attempts = $attempts;

        return $this;
    }

    public function getRemainingTries(): ?int
    {
        return $this->remainingTries;
    }

    public function setRemainingTries(?int $remainingTries): self
    {
        $this->remainingTries = $remainingTries;

        return $this;
    }

    public function getHasWon(): bool
    {
        return $this->hasWon;
    }

    public function setHasWon(bool $hasWon): self
    {
        $this->hasWon = $hasWon;
        return $this;
    }

    public function isHasWon(): ?bool
    {
        return $this->hasWon;
    }

}
