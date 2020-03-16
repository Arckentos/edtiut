<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MatiereRepository")
 */
class Matiere
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $titre;

    /**
     * @ORM\Column(type="string")
     */
    private $reference;


    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Professeur", mappedBy="matieres")
     */
    private $professeurs;

    public function __construct()
    {
        $this->professeurs = new ArrayCollection();
    }

    public function __toString()
    {
        return sprintf('%s (%s)', $this->titre, $this->reference);
    }

    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'titre' => $this->getTitre(),
            'reference' => $this->getReference(),
        ];
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre($titre){
        $this->titre = $titre;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * @return Collection|Professeur[]
     */
    public function getProfesseurs(): Collection
    {
        return $this->professeurs;
    }

    public function addProfesseur(Professeur $professeur): self
    {
        if (!$this->professeurs->contains($professeur)) {
            $this->professeurs[] = $professeur;
            $professeur->addMatiere($this);
        }

        return $this;
    }

    public function removeProfesseur(Professeur $professeur): self
    {
        if ($this->professeurs->contains($professeur)) {
            $this->professeurs->removeElement($professeur);
            $professeur->removeMatiere($this);
        }

        return $this;
    }
}
