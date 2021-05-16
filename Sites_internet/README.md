# Site Internet : Mediatheque


# arborescence :

**code source** : tous les dossiers et fichiers du code source du projet

**document** : 
 - Maquettes
   - Pages
   - ERD
   - Logigrammes
   - IHM ancienne application
 - Evolution
 - Diaporamas
 - Rapports
 - BDD existantes
 - BDD création
 - Infos
 
 
# récapitulatif des fonctionnalités

- 3 types d'utilisateurs :

    -  les **administrateurs** : Utilisateurs ayant les droits les plus élevés, accès à toutes les fonctionnalités du logiciel, 5 personnes, membres du bureau de la commission médiathèque.
    -  les **bénévoles** : personnes faisant partie de la commission, aident sur un certain nombre d’activités, assurent les permanences, font les achats des nouveautés, les enregistrent et les mettent rayon, déclasser les articles. Par contre, ils n’ont pas accès à la gestion de la base des adhérents.
    -  les **adhérents** : salariés Thalès, possèdent un compte nominatif, possibilité limiter de modifier les bdd.
      

- fonctionnalités attendues dans le site :

     - **AUTORISER :**
        - Gestion de la connexion au site :
          - accès au site via Compte =>  Login/mdp
          - gestion accès aux fonctionnalités en fonction des droits login : admin => total, bénévole => intermédaire, adhérent simple => basique
          - en cas d'oubli mdp/login : possibilité de demander de l'aide via une réinitialisation automatique, envoie mail
            
     - **SURVEILLER / MAINTENIR :**
        - Surveillance du système : 
          - enregistrement de toute action sur les BDD avec infos utilisateurs
        - Sauvegarde et restauration : 
          - sauvegardes régulières des BDD avec archivage, création d'un système de restauration
            
     - **ADMINISTRER :** 
        - Pour **admin** : 
          - gestion bdd "Adhérents" :
             - importation, exportation
             - création, modification, suppression
             - gestion des droits sur les fonctions du site
             - moteur de recherche, Edition statistique
          - gestion des règles d'emprunt :
             - définition du nombre par type de média, de la durée autorisée...
             - définition de critères secondaires : nouveautés
             - définition des règles de relance en cas de dépassement, type de contact
           - maintenance du système :
             - visualisation des logs avec recherche mots-clés
             - définition de la fréquence de sauvegarde des BDD
             - Possibilité de restaurer les BDD sauvegardées
        - Pour **bénévoles** : 
           - communiquer vers les "Adhérents" :
             - Mailing /SMS à tous ou à particulier
           - Gestion de bdd "Médias" :
             - Importation, exportation
             - création, modification, désactivation d'un article
             - Moteur de recherche, Edition statistiques 
              
     - **ENREGISTRER LES MOUVEMENTS :** 
        - Pour **bénévoles** : 
           - gestion des mouvements :
             - Mailing /SMS à tous ou à particulier
             - Enregistrer les retours physiques
             - Enregistrer les emprunts physiques
             - Sauvegarder les transactions  
             
     - **RESERVER :** 
        - Pour **adhérents** : 
           - Visualiser le statut des articles :
             - Statut principal : disponible, emprunté
             - Statut complémentaire : réservé (une seule fois)
             - Prévision de la date future disponibilité (estimation)
           - Gestion des souhaits :
             - Possibilité d’ajouter un article dans ses favoris (quelque soit le statut)
             - Possibilité de réserver un article (si dispo, si déjà emprunté sans réservation en cours)
             - Validation du panier avec définition de la date de retrait des articles
             - Envoi de la commande aux bénévoles par mail
             
     - **VISITER :** 
        - Pour **adhérents** : 
           - Consultation de la base de données « Médias » :
             - Moteur de recherche dynamique
             - Visualisation de la liste des articles issus de la recherche
             - Visualiser le détail d’un article
             - Commenter les articles (post)
           - Gestion de son compte :
             - Visualisation des infos de son compte
             - Modification des paramètres autorisés
             - Visualisation des emprunts en cours
             - Visualisation des réservations en cours
             - Visualisation des favoris
             - Visualisation de l’historique des emprunts
           - Contacter l’administrateur/les bénévoles :
             - Poster un message à l’attention de l’administrateur
             - Signaler un dysfonctionnement du site
             - Proposer l’achat d’un média (une adresse par type de média)
           - Discuter :
             - Création, contribution à un forum
             - Chat en direct avec un autre adhérent connecté
 
     - **TELECHARGER**
        - Pour **adhérents** :
           - Visualiser la liste des articles disponibles au téléchargement :
             - Livres numériques, revues, musique, films
           - Gestion d'un panier :
             - Possibilité d'ajouter un article ou plusieurs (quelque soit le statut)
             - Possibilité de télécharger un article ou plusieurs 
             - Validation du panier avec téléchargement du ou des articles (utilisation unique via jeton)
             - Envoi de l'information pour mise à jour du nombre de jetons disponibles pour les articles vers les bénévoles
                
     - **ACHETER**
        - Pour les **adhérents** :
           - Visualiser la liste des articles disponibles à l'achat suite à une désactivation/déclassement :
             - Description + prix à la vente
           - Gestion d'un panier :
             - Possibilité d'ajouter un article dans ses favoris 
             - Possibilité d'acheter un article ou plusieurs avec dégressivité éventuelle du prix en fonction de la quantité
             - Validation du panier avec définition de la date de retrait des articles + mode de paiement
             - Envoi de la commande aux bénévoles par mail
        - Pour les **bénévoles** :
           - Gestion de la transaction financière :
             - Accusé de réception de la commande
             - Préparation de réception de la commande
             - Envoi info passage pour retrait
             - Emissiond de facture
      
 
      
