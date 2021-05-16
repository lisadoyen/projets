<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */
class Categorie
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
    private $libelle;

    /**
     * @ORM\Column(type="decimal", precision=6, scale=2)
     */
    private $montantVenteDefaut;

    /**
     * @ORM\Column(type="integer")
     */
    private $dureeEmpruntMax;

    /**
     * @ORM\Column(type="integer")
     */
    private $dureeEmpruntMaxNouveaute;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbEmpruntMax;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbEmpruntMaxNouveaute;

    /**
     * @ORM\Column(type="integer")
     */
    private $dureeNouveaute;

    /**
     * @ORM\ManyToMany(targetEntity=Genre::class, inversedBy="categories")
     */
    private $genres;

    /**
     * @ORM\ManyToMany(targetEntity=Rubrique::class, inversedBy="categories")
     */
    private $rubriques;

    /**
     * @ORM\OneToMany(targetEntity=Article::class, mappedBy="categorie")
     */
    private $articles;

    public function __construct()
    {
        $this->genres = new ArrayCollection();
        $this->articles = new ArrayCollection();
        $this->rubriques = new ArrayCollection();
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

    public function getDureeEmpruntMax(): ?int
    {
        return $this->dureeEmpruntMax;
    }

    public function setDureeEmpruntMax(int $dureeEmpruntMax): self
    {
        $this->dureeEmpruntMax = $dureeEmpruntMax;

        return $this;
    }

    public function getDureeEmpruntMaxNouveaute(): ?int
    {
        return $this->dureeEmpruntMaxNouveaute;
    }

    public function setDureeEmpruntMaxNouveaute(int $dureeEmpruntMaxNouveaute): self
    {
        $this->dureeEmpruntMaxNouveaute = $dureeEmpruntMaxNouveaute;

        return $this;
    }

    public function getNbEmpruntMax(): ?int
    {
        return $this->nbEmpruntMax;
    }

    public function setNbEmpruntMax(int $nbEmpruntMax): self
    {
        $this->nbEmpruntMax = $nbEmpruntMax;

        return $this;
    }

    public function getNbEmpruntMaxNouveaute(): ?int
    {
        return $this->nbEmpruntMaxNouveaute;
    }

    public function setNbEmpruntMaxNouveaute(int $nbEmpruntMaxNouveaute): self
    {
        $this->nbEmpruntMaxNouveaute = $nbEmpruntMaxNouveaute;

        return $this;
    }

    public function getDureeNouveaute(): ?int
    {
        return $this->dureeNouveaute;
    }

    public function setDureeNouveaute(int $dureeNouveaute): self
    {
        $this->dureeNouveaute = $dureeNouveaute;

        return $this;
    }

    /**
     * @return Collection|Genre[]
     */
    public function getGenres(): Collection
    {
        return $this->genres;
    }

    public function addGenre(Genre $genre): self
    {
        if (!$this->genres->contains($genre)) {
            $this->genres[] = $genre;
        }

        return $this;
    }

    public function removeGenre(Genre $genre): self
    {
        if ($this->genres->contains($genre)) {
            $this->genres->removeElement($genre);
        }

        return $this;
    }

    /**
     * @return Collection|Article[]
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles[] = $article;
            $article->setCategorie($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->contains($article)) {
            $this->articles->removeElement($article);
            // set the owning side to null (unless already changed)
            if ($article->getCategorie() === $this) {
                $article->setCategorie(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->getLibelle();
    }

    public function getMontantVenteDefaut(): ?string
    {
        return $this->montantVenteDefaut;
    }

    public function setMontantVenteDefaut(string $montantVenteDefaut): self
    {
        $this->montantVenteDefaut = $montantVenteDefaut;

        return $this;
    }

    /**
     * @return Collection|Rubrique[]
     */
    public function getRubriques(): Collection
    {
        return $this->rubriques;
    }

    public function addRubrique(Rubrique $rubrique): self
    {
        if (!$this->rubriques->contains($rubrique)) {
            $this->rubriques[] = $rubrique;
        }

        return $this;
    }

    public function removeRubrique(Rubrique $rubrique): self
    {
        if ($this->rubriques->contains($rubrique)) {
            $this->rubriques->removeElement($rubrique);
        }

        return $this;
    }


}
