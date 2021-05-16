<?php

namespace App\Entity;

use App\Repository\EnregistrementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EnregistrementRepository::class)
 */
class Enregistrement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $noCommande;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $datePreparationFini;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateEnregistrement;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateRendu;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateRenduTheorique;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $noteCommunication;

    /**
     * @ORM\ManyToOne(targetEntity=TypeEnregistrement::class, inversedBy="enregistrements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeEnregistrement;

    /**
     * @ORM\ManyToOne(targetEntity=StatutEnregistrement::class, inversedBy="enregistrements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $statutEnregistrement;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="enregistrements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;

    /**
     * @ORM\ManyToOne(targetEntity=Article::class, inversedBy="enregistrements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $article;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="enregistrements")
     */
    private $staffs;

    public function __construct()
    {
        $this->staffs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNoCommande(): ?string
    {
        return $this->noCommande;
    }

    public function setNoCommande(string $noCommande): self
    {
        $this->noCommande = $noCommande;

        return $this;
    }

    public function getDatePreparationFini(): ?\DateTimeInterface
    {
        return $this->datePreparationFini;
    }

    public function setDatePreparationFini($datePreparationFini): self
    {
        $this->datePreparationFini = $datePreparationFini;

        return $this;
    }

    public function getDateEnregistrement(): ?\DateTimeInterface
    {
        return $this->dateEnregistrement;
    }

    public function setDateEnregistrement($dateEnregistrement): self
    {
        $this->dateEnregistrement = $dateEnregistrement;

        return $this;
    }

    public function getDateRendu(): ?\DateTimeInterface
    {
        return $this->dateRendu;
    }

    public function setDateRendu($dateRendu): self
    {
        $this->dateRendu = $dateRendu;

        return $this;
    }

    public function getDateRenduTheorique(): ?\DateTimeInterface
    {
        return $this->dateRenduTheorique;
    }

    public function setDateRenduTheorique($dateRenduTheorique): self
    {
        $this->dateRenduTheorique = $dateRenduTheorique;

        return $this;
    }

    public function getNoteCommunication(): ?string
    {
        return $this->noteCommunication;
    }

    public function setNoteCommunication(?string $noteCommunication): self
    {
        $this->noteCommunication = $noteCommunication;

        return $this;
    }

    public function getTypeEnregistrement(): ?TypeEnregistrement
    {
        return $this->typeEnregistrement;
    }

    public function setTypeEnregistrement(?TypeEnregistrement $typeEnregistrement): self
    {
        $this->typeEnregistrement = $typeEnregistrement;

        return $this;
    }

    public function getStatutEnregistrement(): ?StatutEnregistrement
    {
        return $this->statutEnregistrement;
    }

    public function setStatutEnregistrement(?StatutEnregistrement $statutEnregistrement): self
    {
        $this->statutEnregistrement = $statutEnregistrement;

        return $this;
    }

    public function getUtilisateur(): ?User
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?User $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(?Article $article): self
    {
        $this->article = $article;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getStaffs(): Collection
    {
        return $this->staffs;
    }

    public function addStaff(User $staff): self
    {
        if (!$this->staffs->contains($staff)) {
            $this->staffs[] = $staff;
        }

        return $this;
    }

    public function removeStaff(User $staff): self
    {
        if ($this->staffs->contains($staff)) {
            $this->staffs->removeElement($staff);
        }

        return $this;
    }
}
