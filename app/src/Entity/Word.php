<?php

namespace App\Entity;

use App\Repository\WordRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WordRepository::class)]
class Word
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $word = null;

    #[ORM\OneToMany(mappedBy: 'word', targetEntity: GameState::class, orphanRemoval: true)]
    private Collection $gameStates;

    #[ORM\OneToMany(mappedBy: 'word_id', targetEntity: Like::class, orphanRemoval: true)]
    private Collection $likes;

    public function __construct()
    {
        $this->gameStates = new ArrayCollection();
        $this->likes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getWord(): ?string
    {
        return $this->word;
    }

    public function setWord(string $word): self
    {
        $this->word = $word;

        return $this;
    }

    /**
     * @return Collection<int, GameState>
     */
    public function getGameStates(): Collection
    {
        return $this->gameStates;
    }

    public function addGameState(GameState $gameState): self
    {
        if (!$this->gameStates->contains($gameState)) {
            $this->gameStates->add($gameState);
            $gameState->setWord($this);
        }

        return $this;
    }

    public function removeGameState(GameState $gameState): self
    {
        if ($this->gameStates->removeElement($gameState)) {
            
            if ($gameState->getWord() === $this) {
                $gameState->setWord(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Like>
     */
    public function getLikes(): Collection
    {
        return $this->likes;
    }

    public function addLike(Like $like): self
    {
        if (!$this->likes->contains($like)) {
            $this->likes->add($like);
            $like->setWordId($this);
        }

        return $this;
    }

    public function removeLike(Like $like): self
    {
        if ($this->likes->removeElement($like)) {
           
            if ($like->getWordId() === $this) {
                $like->setWordId(null);
            }
        }

        return $this;
    }
}
