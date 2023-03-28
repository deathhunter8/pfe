<?php

namespace App\Entity;

use App\Repository\FormateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormateurRepository::class)]
class Formateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $nom = null;

    #[ORM\Column(length: 20)]
    private ?string $prenom = null;

    #[ORM\Column(length: 40)]
    private ?string $specification = null;

    #[ORM\Column]
    private ?int $numtel = null;

    #[ORM\Column(length: 50)]
    private ?string $email = null;

    #[ORM\Column]
    private ?int $salaire = null;

    #[ORM\Column]
    private ?int $montantp = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dcontrat = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fcontat = null;

    #[ORM\Column(nullable: true)]
    private ?int $nbabsence = null;

    #[ORM\ManyToOne(inversedBy: 'formateur')]
    private ?Formation $formation = null;

   

 

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getSpecification(): ?string
    {
        return $this->specification;
    }

    public function setSpecification(string $specification): self
    {
        $this->specification = $specification;

        return $this;
    }

    public function getNumtel(): ?int
    {
        return $this->numtel;
    }

    public function setNumtel(int $numtel): self
    {
        $this->numtel = $numtel;

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

    public function getSalaire(): ?int
    {
        return $this->salaire;
    }

    public function setSalaire(int $salaire): self
    {
        $this->salaire = $salaire;

        return $this;
    }

    public function getMontantp(): ?int
    {
        return $this->montantp;
    }

    public function setMontantp(int $montantp): self
    {
        $this->montantp = $montantp;

        return $this;
    }

    public function getDcontrat(): ?\DateTimeInterface
    {
        return $this->dcontrat;
    }

    public function setDcontrat(\DateTimeInterface $dcontrat): self
    {
        $this->dcontrat = $dcontrat;

        return $this;
    }

    public function getFcontat(): ?\DateTimeInterface
    {
        return $this->fcontat;
    }

    public function setFcontat(\DateTimeInterface $fcontat): self
    {
        $this->fcontat = $fcontat;

        return $this;
    }

    public function getNbabsence(): ?int
    {
        return $this->nbabsence;
    }

    public function setNbabsence(?int $nbabsence): self
    {
        $this->nbabsence = $nbabsence;

        return $this;
    }

    public function getFormation(): ?Formation
    {
        return $this->formation;
    }

    public function setFormation(?Formation $formation): self
    {
        $this->formation = $formation;

        return $this;
    }

  
}
