<?php

namespace App\Entity;

use App\Repository\GenreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GenreRepository::class)
 */
class Genre
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
     * @ORM\ManyToMany(targetEntity=Categorie::class, mappedBy="genres")
     */
    private $categories;

    /**
     * @ORM\OneToMany(targetEntity=Article::class, mappedBy="genre")
     */
    private $articles;

    public function __construct()
    {
        $this->rurbiques = new ArrayCollection();
        $this->categories = new ArrayCollection();
        $this->articles = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    public function __toString(){
        return $this->getLibelle();
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
     * @return Collection|Rubrique[]
     */
    public function getRurbiques(): Collection
    {
        return $this->rurbiques;
    }

    public function addRurbique(Rubrique $rurbique): self
    {
        if (!$this->rurbiques->contains($rurbique)) {
            $this->rurbiques[] = $rurbique;
            $rurbique->setGenre($this);
        }

        return $this;
    }

    public function removeRurbique(Rubrique $rurbique): self
    {
        if ($this->rurbiques->contains($rurbique)) {
            $this->rurbiques->removeElement($rurbique);
            // set the owning side to null (unless already changed)
            if ($rurbique->getGenre() === $this) {
                $rurbique->setGenre(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Categorie[]
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Categorie $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
            $category->addGenre($this);
        }

        return $this;
    }

    public function removeCategory(Categorie $category): self
    {
        if ($this->categories->contains($category)) {
            $this->categories->removeElement($category);
            $category->removeGenre($this);
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
            $article->setGenre($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->contains($article)) {
            $this->articles->removeElement($article);
            // set the owning side to null (unless already changed)
            if ($article->getGenre() === $this) {
                $article->setGenre(null);
            }
        }

        return $this;
    }


}
