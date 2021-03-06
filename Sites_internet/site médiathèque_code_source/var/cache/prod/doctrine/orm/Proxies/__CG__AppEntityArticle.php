<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Article extends \App\Entity\Article implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'gencode', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'codeArticle', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'vignette', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'datePublication', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'montantObtention', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'montantCaution', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'montantVente', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'observation', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'numerique', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'categorie', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'liens', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'trancheAge', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'statut', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'genre', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'rubriques', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'tags', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'entites', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'favoris', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'paniers', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'avis', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'enregistrements', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'actions'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'gencode', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'codeArticle', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'vignette', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'datePublication', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'montantObtention', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'montantCaution', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'montantVente', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'observation', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'numerique', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'categorie', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'liens', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'trancheAge', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'statut', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'genre', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'rubriques', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'tags', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'entites', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'favoris', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'paniers', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'avis', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'enregistrements', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'actions'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Article $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getGencode(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGencode', []);

        return parent::getGencode();
    }

    /**
     * {@inheritDoc}
     */
    public function setGencode(?string $gencode): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGencode', [$gencode]);

        return parent::setGencode($gencode);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodeArticle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodeArticle', []);

        return parent::getCodeArticle();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodeArticle(string $codeArticle): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodeArticle', [$codeArticle]);

        return parent::setCodeArticle($codeArticle);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', []);

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre(string $titre): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', [$titre]);

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(?string $description): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getVignette(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVignette', []);

        return parent::getVignette();
    }

    /**
     * {@inheritDoc}
     */
    public function setVignette(?string $vignette): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVignette', [$vignette]);

        return parent::setVignette($vignette);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatePublication(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatePublication', []);

        return parent::getDatePublication();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatePublication(?\DateTimeInterface $datePublication): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatePublication', [$datePublication]);

        return parent::setDatePublication($datePublication);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontantObtention(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontantObtention', []);

        return parent::getMontantObtention();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontantObtention(string $montantObtention): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontantObtention', [$montantObtention]);

        return parent::setMontantObtention($montantObtention);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontantCaution(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontantCaution', []);

        return parent::getMontantCaution();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontantCaution(?string $montantCaution): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontantCaution', [$montantCaution]);

        return parent::setMontantCaution($montantCaution);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontantVente(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontantVente', []);

        return parent::getMontantVente();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontantVente(string $montantVente): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontantVente', [$montantVente]);

        return parent::setMontantVente($montantVente);
    }

    /**
     * {@inheritDoc}
     */
    public function getObservation(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObservation', []);

        return parent::getObservation();
    }

    /**
     * {@inheritDoc}
     */
    public function setObservation(?string $observation): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObservation', [$observation]);

        return parent::setObservation($observation);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumerique(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumerique', []);

        return parent::getNumerique();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumerique(bool $numerique): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumerique', [$numerique]);

        return parent::setNumerique($numerique);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategorie(): ?\App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategorie', []);

        return parent::getCategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategorie(?\App\Entity\Categorie $categorie): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategorie', [$categorie]);

        return parent::setCategorie($categorie);
    }

    /**
     * {@inheritDoc}
     */
    public function getLiens(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLiens', []);

        return parent::getLiens();
    }

    /**
     * {@inheritDoc}
     */
    public function addLien(\App\Entity\Lien $lien): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLien', [$lien]);

        return parent::addLien($lien);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLien(\App\Entity\Lien $lien): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLien', [$lien]);

        return parent::removeLien($lien);
    }

    /**
     * {@inheritDoc}
     */
    public function getTrancheAge(): ?\App\Entity\TrancheAge
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTrancheAge', []);

        return parent::getTrancheAge();
    }

    /**
     * {@inheritDoc}
     */
    public function setTrancheAge(?\App\Entity\TrancheAge $trancheAge): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTrancheAge', [$trancheAge]);

        return parent::setTrancheAge($trancheAge);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatut(): ?\App\Entity\Statut
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatut', []);

        return parent::getStatut();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatut(?\App\Entity\Statut $statut): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatut', [$statut]);

        return parent::setStatut($statut);
    }

    /**
     * {@inheritDoc}
     */
    public function getGenre(): ?\App\Entity\Genre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGenre', []);

        return parent::getGenre();
    }

    /**
     * {@inheritDoc}
     */
    public function setGenre(?\App\Entity\Genre $genre): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGenre', [$genre]);

        return parent::setGenre($genre);
    }

    /**
     * {@inheritDoc}
     */
    public function getRubriques(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRubriques', []);

        return parent::getRubriques();
    }

    /**
     * {@inheritDoc}
     */
    public function addRubrique(\App\Entity\Rubrique $rubrique): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRubrique', [$rubrique]);

        return parent::addRubrique($rubrique);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRubrique(\App\Entity\Rubrique $rubrique): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRubrique', [$rubrique]);

        return parent::removeRubrique($rubrique);
    }

    /**
     * {@inheritDoc}
     */
    public function getTags(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTags', []);

        return parent::getTags();
    }

    /**
     * {@inheritDoc}
     */
    public function addTag(\App\Entity\Tag $tag): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTag', [$tag]);

        return parent::addTag($tag);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTag(\App\Entity\Tag $tag): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTag', [$tag]);

        return parent::removeTag($tag);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntites(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntites', []);

        return parent::getEntites();
    }

    /**
     * {@inheritDoc}
     */
    public function addEntite(\App\Entity\Entite $entite): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEntite', [$entite]);

        return parent::addEntite($entite);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEntite(\App\Entity\Entite $entite): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEntite', [$entite]);

        return parent::removeEntite($entite);
    }

    /**
     * {@inheritDoc}
     */
    public function getFavoris(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFavoris', []);

        return parent::getFavoris();
    }

    /**
     * {@inheritDoc}
     */
    public function getPaniers(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaniers', []);

        return parent::getPaniers();
    }

    /**
     * {@inheritDoc}
     */
    public function addPanier(\App\Entity\Panier $panier): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPanier', [$panier]);

        return parent::addPanier($panier);
    }

    /**
     * {@inheritDoc}
     */
    public function removePanier(\App\Entity\Panier $panier): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePanier', [$panier]);

        return parent::removePanier($panier);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvis(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvis', []);

        return parent::getAvis();
    }

    /**
     * {@inheritDoc}
     */
    public function addAvi(\App\Entity\Avis $avi): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAvi', [$avi]);

        return parent::addAvi($avi);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAvi(\App\Entity\Avis $avi): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAvi', [$avi]);

        return parent::removeAvi($avi);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnregistrements(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnregistrements', []);

        return parent::getEnregistrements();
    }

    /**
     * {@inheritDoc}
     */
    public function addEnregistrement(\App\Entity\Enregistrement $enregistrement): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEnregistrement', [$enregistrement]);

        return parent::addEnregistrement($enregistrement);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEnregistrement(\App\Entity\Enregistrement $enregistrement): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEnregistrement', [$enregistrement]);

        return parent::removeEnregistrement($enregistrement);
    }

    /**
     * {@inheritDoc}
     */
    public function addFavori(\App\Entity\Favoris $favori): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFavori', [$favori]);

        return parent::addFavori($favori);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFavori(\App\Entity\Favoris $favori): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFavori', [$favori]);

        return parent::removeFavori($favori);
    }

    /**
     * {@inheritDoc}
     */
    public function getActions(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActions', []);

        return parent::getActions();
    }

    /**
     * {@inheritDoc}
     */
    public function addAction(\App\Entity\Action $action): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAction', [$action]);

        return parent::addAction($action);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAction(\App\Entity\Action $action): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAction', [$action]);

        return parent::removeAction($action);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
