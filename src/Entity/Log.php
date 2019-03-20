<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LogRepository")
 */
class Log
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
    private $CoverLetter;

    /**
     * @ORM\Column(type="date")
     */
    private $Date;

    /**
     * @ORM\Column(type="integer")
     */
    private $Driver;

    /**
     * @ORM\Column(type="integer")
     */
    private $TruckID;

    /**
     * @ORM\Column(type="integer")
     */
    private $Size;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Location;

    /**
     * @ORM\Column(type="datetime")
     */
    private $TimeLeaving;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EventLocation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EventName;

    /**
     * @ORM\Column(type="integer")
     */
    private $UserID;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCoverLetter(): ?int
    {
        return $this->CoverLetter;
    }

    public function setCoverLetter(int $CoverLetter): self
    {
        $this->CoverLetter = $CoverLetter;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getDriver(): ?int
    {
        return $this->Driver;
    }

    public function setDriver(int $Driver): self
    {
        $this->Driver = $Driver;

        return $this;
    }

    public function getTruckID(): ?int
    {
        return $this->TruckID;
    }

    public function setTruckID(int $TruckID): self
    {
        $this->TruckID = $TruckID;

        return $this;
    }

    public function getSize(): ?int
    {
        return $this->Size;
    }

    public function setSize(int $Size): self
    {
        $this->Size = $Size;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->Location;
    }

    public function setLocation(string $Location): self
    {
        $this->Location = $Location;

        return $this;
    }

    public function getTimeLeaving(): ?\DateTimeInterface
    {
        return $this->TimeLeaving;
    }

    public function setTimeLeaving(\DateTimeInterface $TimeLeaving): self
    {
        $this->TimeLeaving = $TimeLeaving;

        return $this;
    }

    public function getEventLocation(): ?string
    {
        return $this->EventLocation;
    }

    public function setEventLocation(string $EventLocation): self
    {
        $this->EventLocation = $EventLocation;

        return $this;
    }

    public function getEventName(): ?string
    {
        return $this->EventName;
    }

    public function setEventName(string $EventName): self
    {
        $this->EventName = $EventName;

        return $this;
    }

    public function getUserID(): ?int
    {
        return $this->UserID;
    }

    public function setUserID(?int $UserID): self
    {
        $this->UserID = $UserID;

        return $this;
    }
}
