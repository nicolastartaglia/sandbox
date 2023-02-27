<?php

namespace App\Entity;

use App\Repository\GenreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GenreRepository::class)]
class Genre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'genre', targetEntity: Movie::class)]
    private Collection $Movie;

    public function __construct()
    {
        $this->Movie = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Movie>
     */
    public function getMovie(): Collection
    {
        return $this->Movie;
    }

    public function addMovie(Movie $movie): self
    {
        if (!$this->Movie->contains($movie)) {
            $this->Movie->add($movie);
            $movie->setGenre($this);
        }

        return $this;
    }

    public function removeMovie(Movie $movie): self
    {
        if ($this->Movie->removeElement($movie)) {
            // set the owning side to null (unless already changed)
            if ($movie->getGenre() === $this) {
                $movie->setGenre(null);
            }
        }

        return $this;
    }

    // public function __toString(): string
    // {
    //     return $this->name;
    // }
}
