<?php

namespace App\Entity;

use App\Repository\StatutEnregistrementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StatutEnregistrementRepository::class)
 */
class StatutEnregistrement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity=Enregistrement::class, mappedBy="statutEnregistrement", orphanRemoval=true)
     */
    private $enregistrements;

    public function __construct()
    {
        $this->enregistrements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection|Enregistrement[]
     */
    public function getEnregistrements(): Collection
    {
        return $this->enregistrements;
    }

    public function addEnregistrement(Enregistrement $enregistrement): self
    {
        if (!$this->enregistrements->contains($enregistrement)) {
            $this->enregistrements[] = $enregistrement;
            $enregistrement->setStatutEnregistrement($this);
        }

        return $this;
    }

    public function removeEnregistrement(Enregistrement $enregistrement): self
    {
        if ($this->enregistrements->contains($enregistrement)) {
            $this->enregistrements->removeElement($enregistrement);
            // set the owning side to null (unless already changed)
            if ($enregistrement->getStatutEnregistrement() === $this) {
                $enregistrement->setStatutEnregistrement(null);
            }
        }

        return $this;
    }
}
