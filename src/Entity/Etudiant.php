<?php

namespace App\Entity;

use App\Repository\EtudiantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EtudiantRepository::class)]
class Etudiant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $nom = null;

    #[ORM\Column(length: 20)]
    private ?string $prenom = null;

    #[ORM\Column]
    private ?int $numtel = null;

    #[ORM\Column(length: 60)]
    private ?string $email = null;

    #[ORM\Column]
    private ?int $montantp = null;

    #[ORM\Column]
    private ?int $montantnp = null;

    #[ORM\Column(nullable: true)]
    private ?int $nbabsence = null;

    #[ORM\Column(nullable: true)]
    private ?int $numgroupe = null;

    #[ORM\ManyToMany(targetEntity: Formation::class, inversedBy: 'etudiants')]
    private Collection $formation;

    public function __construct()
    {
        $this->formation = new ArrayCollection();
    }

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

    public function getMontantp(): ?int
    {
        return $this->montantp;
    }

    public function setMontantp(int $montantp): self
    {
        $this->montantp = $montantp;

        return $this;
    }

    public function getMontantnp(): ?int
    {
        return $this->montantnp;
    }

    public function setMontantnp(int $montantnp): self
    {
        $this->montantnp = $montantnp;

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

    public function getNumgroupe(): ?int
    {
        return $this->numgroupe;
    }

    public function setNumgroupe(?int $numgroupe): self
    {
        $this->numgroupe = $numgroupe;

        return $this;
    }

    /**
     * @return Collection<int, Formation>
     */
    public function getFormation(): Collection
    {
        return $this->formation;
    }

    public function addFormation(Formation $formation): self
    {
        if (!$this->formation->contains($formation)) {
            $this->formation->add($formation);
        }

        return $this;
    }

    public function removeFormation(Formation $formation): self
    {
        $this->formation->removeElement($formation);

        return $this;
    }
   
}
