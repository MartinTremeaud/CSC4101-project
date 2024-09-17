<?php

namespace App\Entity;

use App\Repository\ExoplanetRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExoplanetRepository::class)]
class Exoplanet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\ManyToOne(inversedBy: 'Exoplanets')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Territories $territories = null;

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

    public function getTerritories(): ?Territories
    {
        return $this->territories;
    }

    public function setTerritories(?Territories $territories): static
    {
        $this->territories = $territories;

        return $this;
    }
}
