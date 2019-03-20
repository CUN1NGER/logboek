<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TruckRepository")
 */
class Truck
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity="App\Entity\Log", mappedBy="truck")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $LiscensePlate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Make;

    /**
     * @ORM\Column(type="float")
     */
    private $BuildYear;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLiscensePlate(): ?string
    {
        return $this->LiscensePlate;
    }

    public function setLiscensePlate(string $LiscensePlate): self
    {
        $this->LiscensePlate = $LiscensePlate;

        return $this;
    }

    public function getMake(): ?string
    {
        return $this->Make;
    }

    public function setMake(string $Make): self
    {
        $this->Make = $Make;

        return $this;
    }

    public function getBuildYear(): ?float
    {
        return $this->BuildYear;
    }

    public function setBuildYear(float $BuildYear): self
    {
        $this->BuildYear = $BuildYear;

        return $this;
    }
}
