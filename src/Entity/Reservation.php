<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDepart;

    /**
     * @ORM\Column(type="date")
     */
    private $heure;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomcompagnie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numeroVol;

    /**
     * @ORM\Column(type="integer")
     */
    private $NbreBagage;

    /**
     * @ORM\Column(type="integer")
     */
    private $NbreAccompagnants;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDepart(): ?\DateTimeInterface
    {
        return $this->dateDepart;
    }

    public function setDateDepart(\DateTimeInterface $dateDepart): self
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->heure;
    }

    public function setHeure(\DateTimeInterface $heure): self
    {
        $this->heure = $heure;

        return $this;
    }

    public function getNomcompagnie(): ?string
    {
        return $this->nomcompagnie;
    }

    public function setNomcompagnie(string $nomcompagnie): self
    {
        $this->nomcompagnie = $nomcompagnie;

        return $this;
    }

    public function getNumeroVol(): ?string
    {
        return $this->numeroVol;
    }

    public function setNumeroVol(string $numeroVol): self
    {
        $this->numeroVol = $numeroVol;

        return $this;
    }

    public function getNbreBagage(): ?int
    {
        return $this->NbreBagage;
    }

    public function setNbreBagage(int $NbreBagage): self
    {
        $this->NbreBagage = $NbreBagage;

        return $this;
    }

    public function getNbreAccompagnants(): ?int
    {
        return $this->NbreAccompagnants;
    }

    public function setNbreAccompagnants(int $NbreAccompagnants): self
    {
        $this->NbreAccompagnants = $NbreAccompagnants;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }
}
