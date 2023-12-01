<?php

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
#[UniqueEntity(fields: ['username'], message: 'There is already an account with this username')]

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */


 class Users implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $username = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;


      /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: GameState::class, orphanRemoval: true)]
    private Collection $gameStates;

    #[ORM\OneToMany(mappedBy: 'user_id', targetEntity: Like::class, orphanRemoval: true)]
    private Collection $likes;

   

    #[ORM\Column(nullable: true)]
    private ?int $age = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $avatar = null;



   

  

    public function __construct()
    {
        $this->gameStates = new ArrayCollection();
        $this->likes = new ArrayCollection();
       
      
    }

   

 

    public function getId(): ?int
    {
        return $this->id;
    }

     /**
     * @see UserInterface
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username)
    {
        $this->username = $username;

        return $this;
    }

     /**
     * @see UserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }

     /**
     * @see UserInterface
     */
    public function getSalt()
    {
        
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize([
            $this->id,
            $this->password,
        
        ]);
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->password,
       
        ) = unserialize($serialized, ['allowed_classes' => false]);
    }

  /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;

        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }
    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

  
      
      // Implementation des méthodes de l'interface UserInterface
      public function getUserIdentifier(): string
      {
          return (string) $this->username;
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
              $gameState->setUser($this);
          }

          return $this;
      }

      public function removeGameState(GameState $gameState): self
      {
          if ($this->gameStates->removeElement($gameState)) {
           
              if ($gameState->getUser() === $this) {
                  $gameState->setUser(null);
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
              $like->setUserId($this);
          }

          return $this;
      }

      public function removeLike(Like $like): self
      {
          if ($this->likes->removeElement($like)) {
             
              if ($like->getUserId() === $this) {
                  $like->setUserId(null);
              }
          }

          return $this;
      }

   

      public function getAge(): ?int
      {
          return $this->age;
      }

      public function setAge(?int $age): self
      {
          $this->age = $age;

          return $this;
      }

      public function getDescription(): ?string
      {
          return $this->description;
      }

      public function setDescription(?string $description): self
      {
          $this->description = $description;

          return $this;
      }

     


public function getAvatar(): ?string
{
    return $this->avatar;
}

public function setAvatar(?string $avatar): self
{
    $this->avatar = $avatar;

    return $this;
}


      
     
      
}
