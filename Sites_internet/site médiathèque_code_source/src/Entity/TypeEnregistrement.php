<?php

namespace App\Entity;

use App\Repository\TypeEnregistrementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeEnregistrementRepository::class)
 */
class TypeEnregistrement
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
     * @ORM\OneToMany(targetEntity=Panier::class, mappedBy="typeEnregistrement", orphanRemoval=true)
     */
    private $paniers;

    /**
     * @ORM\OneToMany(targetEntity=Enregistrement::class, mappedBy="typeEnregistrement", orphanRemoval=true)
     */
    private $enregistrements;

    public function __construct()
    {
        $this->paniers = new ArrayCollection();
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
     * @return Collection|Panier[]
     */
    public function getPaniers(): Collection
    {
        return $this->paniers;
    }

    public function addPanier(Panier $panier): self
    {
        if (!$this->paniers->contains($panier)) {
            $this->paniers[] = $panier;
            $panier->setTypeEnregistrement($this);
        }

        return $this;
    }

    public function removePanier(Panier $panier): self
    {
        if ($this->paniers->contains($panier)) {
            $this->paniers->removeElement($panier);
            // set the owning side to null (unless already changed)
            if ($panier->getTypeEnregistrement() === $this) {
                $panier->setTypeEnregistrement(null);
            }
        }

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
            $enregistrement->setTypeEnregistrement($this);
        }

        return $this;
    }

    public function removeEnregistrement(Enregistrement $enregistrement): self
    {
        if ($this->enregistrements->contains($enregistrement)) {
            $this->enregistrements->removeElement($enregistrement);
            // set the owning side to null (unless already changed)
            if ($enregistrement->getTypeEnregistrement() === $this) {
                $enregistrement->setTypeEnregistrement(null);
            }
        }

        return $this;
    }
}
