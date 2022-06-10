<?php

namespace App\Entity;

use App\Repository\VolRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=VolRepository::class)
 */
class Vol
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank(message="Veuillez entrer une date de depart")
     */
    private $date;

    /**
     * @ORM\Column(type="datetime")
     */
    private $heure;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Veuillez entrer le nom de la compagnie")
     */
    private $compagnie;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Ce champ est requis")
     */
    private $numeroVol;

    /**
     * @ORM\Column(type="integer")

     */
    private $nbreBagages;

    /**
     * @ORM\Column(type="integer")

     */
    private $nbreAccompagnants;

    /**
     * @ORM\Column(type="string", length=255)
    
     */
    private $numero;

    /**
     * @ORM\Column(type="integer")

     */
    private $nbrepasseagers;

    /**
     * @ORM\Column(type="string", length=255)

     * @Assert\Length(min=10)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     *     * @Assert\NotBlank(message="Renseigner le nom")
     */
    private $Nom_et_prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Etat;

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

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->heure;
    }

    public function setHeure(\DateTimeInterface $heure): self
    {
        $this->heure = $heure;

        return $this;
    }

    public function getCompagnie(): ?string
    {
        return $this->compagnie;
    }

    public function setCompagnie(string $compagnie): self
    {
        $this->compagnie = $compagnie;

        return $this;
    }

    public function getNumeroVol(): ?int
    {
        return $this->numeroVol;
    }

    public function setNumeroVol(int $numeroVol): self
    {
        $this->numeroVol = $numeroVol;

        return $this;
    }

    public function getNbreBagages(): ?int
    {
        return $this->nbreBagages;
    }

    public function setNbreBagages(int $nbreBagages): self
    {
        $this->nbreBagages = $nbreBagages;

        return $this;
    }

    public function getNbreAccompagnants(): ?int
    {
        return $this->nbreAccompagnants;
    }

    public function setNbreAccompagnants(int $nbreAccompagnants): self
    {
        $this->nbreAccompagnants = $nbreAccompagnants;

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getNbrepasseagers(): ?int
    {
        return $this->nbrepasseagers;
    }

    public function setNbrepasseagers(int $nbrepasseagers): self
    {
        $this->nbrepasseagers = $nbrepasseagers;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNomEtPrenom(): ?string
    {
        return $this->Nom_et_prenom;
    }

    public function setNomEtPrenom(string $Nom_et_prenom): self
    {
        $this->Nom_et_prenom = $Nom_et_prenom;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->Etat;
    }

    public function setEtat(string $Etat): self
    {
        $this->Etat = $Etat;

        return $this;
    }
}