<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields = {"username"},message ="Cette identifiant est déjà utilisé")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=false, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Email(message = "L'email est invalide")
     */
    private $emailPerso;

    /**
     * @var string The hashed password
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min="8", max="255", minMessage="Le mot de passe doit faire au minimum 8 caractères", maxMessage="Le mot de passe est trop grand")
     */
    private $password;

    /**
     * @Assert\EqualTo(propertyPath="password", message="Les mots de passe doivent être identiques")
     */
    private $confirm_password;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $telPerso;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $matricule;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $sexe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $avatar;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $telPerso2;

    /**
     * @ORM\Column(type="boolean")
     */
    private $notificationPerso;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $telPro;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $telPro2;

    /**
     * @ORM\Column(type="string", length=254, nullable=true)
     */
    private $emailPro;

    /**
     * @ORM\Column(type="boolean")
     */
    private $notificationPro;

    /**
     * @ORM\Column(type="string", length=254, unique=true)
     */
    private $emailRecup;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresseRue;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresseRueComplement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $codePostal;

    /**
     * @ORM\Column(type="boolean")
     */
    private $droitEmprunt;

    /**
     * @ORM\Column(type="boolean")
     */
    private $droitAchat;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $commentaireUtilisateur;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $commentaireStaff;

    /**
     * @ORM\ManyToOne(targetEntity=Entreprise::class, inversedBy="users")
     * @ORM\JoinColumn(nullable=false)
     */
    private $entreprise;

    /**
     * @ORM\Column(type="date")
     */
    private $dateCreation;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateModification;

    /**
     * @ORM\ManyToOne(targetEntity=Fonction::class, inversedBy="users")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fonction;

    /**
     * @ORM\OneToMany(targetEntity=Annonce::class, mappedBy="staff", orphanRemoval=true)
     */
    private $annonces;

    /**
     * @ORM\OneToMany(targetEntity=Favoris::class, mappedBy="utilisateur", orphanRemoval=true)
     */
    private $favoris;

    /**
     * @ORM\OneToMany(targetEntity=Action::class, mappedBy="staff", orphanRemoval=true)
     */
    private $actions;

    /**
     * @ORM\OneToMany(targetEntity=Panier::class, mappedBy="utilisateur", orphanRemoval=true)
     */
    private $paniers;

    /**
     * @ORM\OneToMany(targetEntity=Avis::class, mappedBy="utilisateur")
     */
    private $avis;

    /**
     * @ORM\OneToMany(targetEntity=Enregistrement::class, mappedBy="utilisateur")
     */
    private $enregistrements;

    public function __construct()
    {
        $this->annonces = new ArrayCollection();
        $this->favoris = new ArrayCollection();
        $this->actions = new ArrayCollection();
        $this->paniers = new ArrayCollection();
        $this->avis = new ArrayCollection();
        $this->enregistrements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmailPerso(): ?string
    {
        return $this->emailPerso;
    }

    public function setEmailPerso(string $emailPerso): self
    {
        $this->emailPerso = $emailPerso;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getTelPerso(): ?int
    {
        return $this->telPerso;
    }

    public function setTelPerso(?int $telPerso): self
    {
        $this->telPerso = $telPerso;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getConfirmPassword(): ?string
    {
        return $this->confirm_password;
    }

    public function setConfirmPassword(string $confirm_password): self
    {
        $this->confirm_password = $confirm_password;

        return $this;
    }

    public function getSalt()
    {
    }

    public function eraseCredentials()
    {
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        if (empty($roles)) {
            $roles[] = 'ROLE_ADHERENT';
        }

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setAvatar($avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getTelPerso2(): ?string
    {
        return $this->telPerso2;
    }

    public function setTelPerso2(?string $telPerso2): self
    {
        $this->telPerso2 = $telPerso2;

        return $this;
    }

    public function getNotificationPerso(): ?bool
    {
        return $this->notificationPerso;
    }

    public function setNotificationPerso(bool $notificationPerso): self
    {
        $this->notificationPerso = $notificationPerso;

        return $this;
    }

    public function getTelPro(): ?string
    {
        return $this->telPro;
    }

    public function setTelPro(?string $telPro): self
    {
        $this->telPro = $telPro;

        return $this;
    }

    public function getTelPro2(): ?string
    {
        return $this->telPro2;
    }

    public function setTelPro2(?string $telPro2): self
    {
        $this->telPro2 = $telPro2;

        return $this;
    }

    public function getEmailPro(): ?string
    {
        return $this->emailPro;
    }

    public function setEmailPro(string $emailPro): self
    {
        $this->emailPro = $emailPro;

        return $this;
    }

    public function getNotificationPro(): ?bool
    {
        return $this->notificationPro;
    }

    public function setNotificationPro(bool $notificationPro): self
    {
        $this->notificationPro = $notificationPro;

        return $this;
    }

    public function getEmailRecup(): ?string
    {
        return $this->emailRecup;
    }

    public function setEmailRecup(string $emailRecup): self
    {
        $this->emailRecup = $emailRecup;

        return $this;
    }

    public function getAdresseRue(): ?string
    {
        return $this->adresseRue;
    }

    public function setAdresseRue(?string $adresseRue): self
    {
        $this->adresseRue = $adresseRue;

        return $this;
    }

    public function getAdresseRueComplement(): ?string
    {
        return $this->adresseRueComplement;
    }

    public function setAdresseRueComplement(?string $adresseRueComplement): self
    {
        $this->adresseRueComplement = $adresseRueComplement;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->codePostal;
    }

    public function setCodePostal(?int $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getDroitEmprunt(): ?bool
    {
        return $this->droitEmprunt;
    }

    public function setDroitEmprunt(bool $droitEmprunt): self
    {
        $this->droitEmprunt = $droitEmprunt;

        return $this;
    }

    public function getDroitAchat(): ?bool
    {
        return $this->droitAchat;
    }

    public function setDroitAchat(bool $droitAchat): self
    {
        $this->droitAchat = $droitAchat;

        return $this;
    }

    public function getCommentaireUtilisateur(): ?string
    {
        return $this->commentaireUtilisateur;
    }

    public function setCommentaireUtilisateur(?string $commentaireUtilisateur): self
    {
        $this->commentaireUtilisateur = $commentaireUtilisateur;

        return $this;
    }

    public function getCommentaireStaff(): ?string
    {
        return $this->commentaireStaff;
    }

    public function setCommentaireStaff(?string $commentaireStaff): self
    {
        $this->commentaireStaff = $commentaireStaff;

        return $this;
    }

    public function getEntreprise(): ?Entreprise
    {
        return $this->entreprise;
    }

    public function setEntreprise(?Entreprise $entreprise): self
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getDateModification(): ?\DateTimeInterface
    {
        return $this->dateModification;
    }

    public function setDateModification(?\DateTimeInterface $dateModification): self
    {
        $this->dateModification = $dateModification;

        return $this;
    }

    public function getFonction(): ?Fonction
    {
        return $this->fonction;
    }

    public function setFonction(?Fonction $fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * @return Collection|Annonce[]
     */
    public function getAnnonces(): Collection
    {
        return $this->annonces;
    }

    public function addAnnonce(Annonce $annonce): self
    {
        if (!$this->annonces->contains($annonce)) {
            $this->annonces[] = $annonce;
            $annonce->setStaff($this);
        }

        return $this;
    }

    public function removeAnnonce(Annonce $annonce): self
    {
        if ($this->annonces->contains($annonce)) {
            $this->annonces->removeElement($annonce);
            // set the owning side to null (unless already changed)
            if ($annonce->getStaff() === $this) {
                $annonce->setStaff(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Favoris[]
     */
    public function getFavoris(): Collection
    {
        return $this->favoris;
    }

    public function addFavori(Favoris $favori): self
    {
        if (!$this->favoris->contains($favori)) {
            $this->favoris[] = $favori;
            $favori->setUtilisateur($this);
        }

        return $this;
    }

    public function removeFavori(Favoris $favori): self
    {
        if ($this->favoris->contains($favori)) {
            $this->favoris->removeElement($favori);
            // set the owning side to null (unless already changed)
            if ($favori->getUtilisateur() === $this) {
                $favori->setUtilisateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Action[]
     */
    public function getActions(): Collection
    {
        return $this->actions;
    }

    public function addAction(Action $action): self
    {
        if (!$this->actions->contains($action)) {
            $this->actions[] = $action;
            $action->setStaff($this);
        }

        return $this;
    }

    public function removeAction(Action $action): self
    {
        if ($this->actions->contains($action)) {
            $this->actions->removeElement($action);
            // set the owning side to null (unless already changed)
            if ($action->getStaff() === $this) {
                $action->setStaff(null);
            }
        }

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
            $panier->setUtilisateur($this);
        }

        return $this;
    }

    public function removePanier(Panier $panier): self
    {
        if ($this->paniers->contains($panier)) {
            $this->paniers->removeElement($panier);
            // set the owning side to null (unless already changed)
            if ($panier->getUtilisateur() === $this) {
                $panier->setUtilisateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Avis[]
     */
    public function getAvis(): Collection
    {
        return $this->avis;
    }

    public function addAvi(Avis $avi): self
    {
        if (!$this->avis->contains($avi)) {
            $this->avis[] = $avi;
            $avi->setUtilisateur($this);
        }

        return $this;
    }

    public function removeAvi(Avis $avi): self
    {
        if ($this->avis->contains($avi)) {
            $this->avis->removeElement($avi);
            // set the owning side to null (unless already changed)
            if ($avi->getUtilisateur() === $this) {
                $avi->setUtilisateur(null);
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
            $enregistrement->setUtilisateur($this);
        }

        return $this;
    }

    public function removeEnregistrement(Enregistrement $enregistrement): self
    {
        if ($this->enregistrements->contains($enregistrement)) {
            $this->enregistrements->removeElement($enregistrement);
            // set the owning side to null (unless already changed)
            if ($enregistrement->getUtilisateur() === $this) {
                $enregistrement->setUtilisateur(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->getNom(). " " .$this->getPrenom();
    }


}
