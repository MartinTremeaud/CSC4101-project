<?php

namespace App\Entity;

use App\Repository\TerritoriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TerritoriesRepository::class)]
class Territories
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    /**
     * @var Collection<int, Exoplanet>
     */
    #[ORM\OneToMany(targetEntity: Exoplanet::class, mappedBy: 'territories', orphanRemoval: true, cascade: ["persist"] )]
    private Collection $Exoplanets;

    public function __construct()
    {
        $this->Exoplanets = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, Exoplanet>
     */
    public function getExoplanets(): Collection
    {
        return $this->Exoplanets;
    }

    public function addExoplanet(Exoplanet $exoplanet): static
    {
        if (!$this->Exoplanets->contains($exoplanet)) {
            $this->Exoplanets->add($exoplanet);
            $exoplanet->setTerritories($this);
        }

        return $this;
    }

    public function removeExoplanet(Exoplanet $exoplanet): static
    {
        if ($this->Exoplanets->removeElement($exoplanet)) {
            // set the owning side to null (unless already changed)
            if ($exoplanet->getTerritories() === $this) {
                $exoplanet->setTerritories(null);
            }
        }

        return $this;
    }
}
