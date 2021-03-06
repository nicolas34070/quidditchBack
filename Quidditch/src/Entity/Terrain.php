<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TerrainRepository")
 */
class Terrain
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idTerrain;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $lieu;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdTerrain(): ?int
    {
        return $this->idTerrain;
    }

    public function setIdTerrain(int $idTerrain): self
    {
        $this->idTerrain = $idTerrain;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getLieu(): ?int
    {
        return $this->lieu;
    }

    public function setLieu(?int $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }
}
