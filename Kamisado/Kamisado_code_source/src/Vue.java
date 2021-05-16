import javax.swing.*;
import java.awt.*;

public class Vue extends JFrame {

    //déclaration du Model
    protected Model model;
    //déclaration des nom des Icones
    protected String nom;
    protected String[] couleurBlanc;
    protected String[] couleurNoir;
    protected String noir;
    protected String blanc;
    //Initialisation de la couleur de la case ou se pose l'intelligence artificielle (méthode : deplaceIA)
    protected String colCase = null;
    //initialisation d'un compteur, il servira pour le départ du jeu
    int count = 0;
    //déclaration du menu
    protected JMenu menu;
    protected JMenuBar barMenu;
    protected JMenuItem itemNewPartie;
    protected JMenuItem itemNewPartieAvecIA;
    //JButton = plateau
    protected JButton[][] tabPlateau;
    //ImageIcon représantant les points d'interrogation
    protected ImageIcon iconePoint;
    //ImageIcon des tours blanches
    protected ImageIcon tourBlanc;
    //ImageIcon des tours noires
    protected ImageIcon tourNoir;
    //ImageIcon de l'image affiché dans l'OptionPane lorsque l'on gagne
    protected ImageIcon ImgGagne;
    //Réponse lorsque la partie est fini
    protected String[] reponse;
    //déclaration de la table des couleurs des cases
    protected Color[] tabColorCases;
    //initialisation des couleurs des tours et des cases dans le plateau
    //couleurs des joueurs
    protected static final Color white = Color.WHITE;
    protected static final Color black = Color.BLACK;
    //couleurs des tours et des cases
    protected static final Color bleu = Color.BLUE;
    protected static final Color vert = Color.GREEN;
    protected static final Color jaune = Color.YELLOW;
    protected static final Color orange = Color.ORANGE;
    protected static final Color rose = Color.PINK;
    protected static final Color rouge = Color.RED;
    protected static final Color gris = new Color(192, 192, 192);
    protected static final Color violet = new Color(238, 130, 238);

    /**Constructeur de la classe fenêtre
    *@param model la vue possède le model en paramètre**/
    public Vue(Model model) {
        //initialisation de la fenetre
        //la vue a accès au Model
        this.model = model;
        //initialisation des attributes
        this.initAttribut();
        //affichage du menu
        this.creerMenu();
        //affichage du plateau
        this.plateauInitiale();
        //message d'infirmation au début de chaque partie (il se ferme au bout de quelques secondes)
        MessageDebutRegleDuJeu.showAutoCloseDialog(this, "Règles du jeu", 10000L);
        //définition de la taille de la fenêtre, ici j'ai choisi 700x700
        changerDimensionFenetre(700,700);
        //cette fenêtre se positionne au milieu
        this.setLocationRelativeTo(null);
        //elle ne peut pas se réduire ou s'agrandir, elle est fixe
        this.setResizable(false);
        //elle se ferme quand l'utilisateur le souhaite
        this.setDefaultCloseOperation(this.DISPOSE_ON_CLOSE);
        //ajout d'un icon à la fenêtre
        Image img =Toolkit.getDefaultToolkit().getImage("img/icone.png");
        this.setIconImage(img);
        //déclaration du titre
        this.setTitle("Kamisado");
        //la fenêtre est visible
        this.setVisible(true);
    }

    /**Méthode pour modifier la taille de la fenêtre
     *@param width la largeur
     *@param height la hauteur**/
    public void changerDimensionFenetre(int width, int height){
        this.setSize(width, height);
        pack();
    }

    /**Méthode pour initialiser les attributs**/
    public void initAttribut() {
        //initialisation du meu
        this.barMenu = new JMenuBar();
        this.menu = new JMenu("Options");
        this.itemNewPartie = new JMenuItem("Nouvelle partie");
        this.itemNewPartieAvecIA = new JMenuItem("Nouvelle partie avec l'intelligence artificielle");
        //initialisation tableau de JButton pour le plateau
        tabPlateau = new JButton[8][8];
        //initialisation des noms des icones (images)
        nom = "img/Tour";
        couleurBlanc = new String[]{"Gris", "Vert", "Rouge", "Jaune", "Rose", "Violet", "Bleu", "Orange"};
        couleurNoir = new String[]{"Orange", "Bleu", "Violet", "Rose", "Jaune", "Rouge", "Vert", "Gris"};
        noir = "_noir";
        blanc = "_blanc";
        //initialisation des icones avec les points d'interrogations
        iconePoint = new ImageIcon("img/point.png");
        //initialisation images et réponses lorsque la partie est terminée
        reponse = new String[]{"nouvelle partie", "nouvelle partie avec IA"};
        ImgGagne = new ImageIcon("img/gagne.png");
    }

    /**Méthode pour afficher le plateau de jeu dans la fenêtre**/
    public void plateauInitiale() {
        //création JPanel, c'est une grille de 8x8
        JPanel panelGrille = new JPanel(new GridLayout(8, 8));
        //2 boucles imbriquées, ligne et colonne
        for (int ligne = 0; ligne < getTabPlateau().length; ligne++) {
            for (int colonne = 0; colonne < getTabPlateau()[ligne].length; colonne++) {
                //déclaration et initialisation des boutons et des icones par dessus
                getTabPlateau()[ligne][colonne] = new JButton();
                getTabPlateau()[ligne][colonne].setOpaque(true);
                tourBlanc = new ImageIcon(getNom() + getCouleurBlanc()[colonne] + getBlanc() + ".png");
                tourNoir = new ImageIcon(getNom() + getCouleurNoir()[colonne] + getNoir() + ".png");
                tabColorCases = new Color[]{getGris(), getVert(), getRouge(), getJaune(), getRose(),
                        getViolet(), getBleu(), getOrange()};
                //8 boucles if pour initialiser les couleurs des boutons
                if (colonne == 0 && ligne == 0 || colonne == 1 && ligne == 1 || colonne == 2 && ligne == 2
                        || colonne == 3 && ligne == 3 || colonne == 4 && ligne == 4 || colonne == 5 && ligne == 5
                        || colonne == 6 && ligne == 6 || colonne == 7 && ligne == 7) {
                    getTabPlateau()[ligne][colonne].setBackground(getTabColor()[0]);
                }
                if (colonne == 1 && ligne == 0 || colonne == 4 && ligne == 1 || colonne == 7 && ligne == 2
                        || colonne == 2 && ligne == 3 || colonne == 5 && ligne == 4 || colonne == 0 && ligne == 5
                        || colonne == 3 && ligne == 6 || colonne == 6 && ligne == 7) {
                    getTabPlateau()[ligne][colonne].setBackground(getTabColor()[1]);
                }
                if (colonne == 2 && ligne == 0 || colonne == 7 && ligne == 1 || colonne == 4 && ligne == 2
                        || colonne == 1 && ligne == 3 || colonne == 6 && ligne == 4 || colonne == 3 && ligne == 5
                        || colonne == 0 && ligne == 6 || colonne == 5 && ligne == 7) {
                    getTabPlateau()[ligne][colonne].setBackground(getTabColor()[2]);
                }
                if (colonne == 3 && ligne == 0 || colonne == 2 && ligne == 1 || colonne == 1 && ligne == 2
                        || colonne == 0 && ligne == 3 || colonne == 7 && ligne == 4 || colonne == 6 && ligne == 5
                        || colonne == 5 && ligne == 6 || colonne == 4 && ligne == 7) {
                    getTabPlateau()[ligne][colonne].setBackground(getTabColor()[3]);
                }
                if (colonne == 4 && ligne == 0 || colonne == 5 && ligne == 1 || colonne == 6 && ligne == 2
                        || colonne == 7 && ligne == 3 || colonne == 0 && ligne == 4 || colonne == 1 && ligne == 5
                        || colonne == 2 && ligne == 6 || colonne == 3 && ligne == 7) {
                    getTabPlateau()[ligne][colonne].setBackground(getTabColor()[4]);
                }
                if (colonne == 5 && ligne == 0 || colonne == 0 && ligne == 1 || colonne == 3 && ligne == 2
                        || colonne == 6 && ligne == 3 || colonne == 1 && ligne == 4 || colonne == 4 && ligne == 5
                        || colonne == 7 && ligne == 6 || colonne == 2 && ligne == 7) {
                    getTabPlateau()[ligne][colonne].setBackground(getTabColor()[5]);
                }
                if (colonne == 6 && ligne == 0 || colonne == 3 && ligne == 1 || colonne == 0 && ligne == 2
                        || colonne == 5 && ligne == 3 || colonne == 2 && ligne == 4 || colonne == 7 && ligne == 5
                        || colonne == 4 && ligne == 6 || colonne == 1 && ligne == 7) {
                    getTabPlateau()[ligne][colonne].setBackground(getTabColor()[6]);
                }
                if (colonne == 7 && ligne == 0 || colonne == 6 && ligne == 1 || colonne == 5 && ligne == 2
                        || colonne == 4 && ligne == 3 || colonne == 3 && ligne == 4 || colonne == 2 && ligne == 5
                        || colonne == 1 && ligne == 6 || colonne == 0 && ligne == 7) {
                    getTabPlateau()[ligne][colonne].setBackground(getTabColor()[7]);
                }
                //ajout des icones sur les lignes 0 et 7
                if (ligne == 0)
                    getTabPlateau()[ligne][colonne].setIcon(getTourBlanc());
                if (ligne == 7)
                    getTabPlateau()[ligne][colonne].setIcon(getTourNoir());
                //initilialisation des bordures des boutons en blanc
                changerCouleurBordure(ligne, colonne, getWhite(), 0);
                //ajout des boutons dans le panelGrille
                panelGrille.add(getTabPlateau()[ligne][colonne]);
                getTabPlateau()[ligne][colonne].setOpaque(true);
            }
        }
        this.setContentPane(panelGrille);
    }
    /*---------------------------------------------FENETRE DE DIALOGUE------------------------------------------------*/
    /**Méthode pour afficher les messages d'erreur
     * @param messageErr pour intialiser un message spécifique**/
    public void creerDialogErr(String messageErr) {
        //création OptionPane, le message est de type erreur
        JOptionPane messErr = new JOptionPane();
        messErr.showMessageDialog(this,messageErr, "Erreur", JOptionPane.ERROR_MESSAGE);
    }
    /**Méthode pour afficher les messages d'information
     * @param messageInfo pour intialiser un message spécifique**/
    public void creerDialogInfo(String messageInfo) {
        //création OptionPane, le message est informatif
        JOptionPane mess = new JOptionPane();
        mess.showMessageDialog(this,messageInfo, "Information", JOptionPane.INFORMATION_MESSAGE);
    }
    /**Méthode pour afficher le message lorsqu'un joueur a gagné
     * @param messageGagne pour intialiser un message spécifique**/
    public void creerDialogVainqueur(String messageGagne) {
        //création OptionPane, le message est personnalisé, c'est un message optionnel
        JOptionPane mess = new JOptionPane();
        int input = mess.showOptionDialog(this, messageGagne, "PARTIE TERMINE",
                JOptionPane.YES_NO_OPTION, JOptionPane.INFORMATION_MESSAGE, getImgGagne(),
                getReponse(), getReponse()[0]);
        //en fonction de l'option choisie la partie sera soit avec ou sans l'intelligence artificielle
        if (input == 0) {
            this.NouvellePartie();
            ControlGroup controlGroup = new ControlGroup();
            controlGroup.getModel().setAvecIA(false);
        }if (input == 1) {
            this.NouvellePartie();
            ControlGroup controlGroup = new ControlGroup();
            controlGroup.getModel().setAvecIA(true);
        }
    }
    /*----------------------------------------------------------------------------------------------------------------*/
    /*---------------------------------------------------CONTROLLER---------------------------------------------------*/
    /**Méthode pour générer un actionlistener sur les bouttons dans le plateau
     * @param controlBut pour intialiser le controlBouton**/
    public void setControlButton(ControlBouton controlBut) {
        for (int colonne = 0; colonne < 8; colonne++) {
            for (int ligne = 0; ligne < 8; ligne++) {
                getTabPlateau()[colonne][ligne].addActionListener(controlBut);
            }
        }
    }
    /**Méthode pour générer un actionlistener sur les bouttons dans le menu
     * @param controlMenu pour intialiser le controlMenu**/
    public void setControlMenu(ControlMenu controlMenu) {
        this.getItemNewPartie().addActionListener(controlMenu);
        this.getItemNewPartieAvecIA().addActionListener(controlMenu);
    }
    /*----------------------------------------------------------------------------------------------------------------*/
    /*---------------------------------------------METHODES POUR JOUER------------------------------------------------*/
    /**Méthode pour afficher les cases disponibles  en vertical pour le joueur blanc
     * @param ligne pour intialiser la ligne sur laquelle le joueur clique
     * @param colonne pour intialiser la colonne sur laquelle le joueur clique**/
    public void afficheCasesDispoVerticaleBlanc(int ligne, int colonne){
        //boolean pour ne pas afficher les points d'interrogation dès qu'il y a une tour sur le chemin
        boolean piece = false;
        for (int i = 0; i < 8; i++) {
            if (piece)
                break;
            for (int j = 0; j < 8; j++) {
                if (piece)
                    break;
                //si i est plus grand que la ligne, que j est égale à la colonne et que le joueur est blanc
                if (i > ligne && j == colonne &&
                        (getModel().getGrille().couleurJoueur(ligne, colonne, "blanc"))) {
                    //si la case (i,j) ne contient pas de tour
                    if (tourSurCaseDansVue(i,j)) {
                        //alors on affiche les points d'interrogation et la bordure des boutons devient noir
                        changerCouleurBordure(i, j, getBlack(), 1);
                        afficheImgPoint(i, j);
                    } else
                        piece = true;
                }
            }
        }
    }
    /**Méthode pour afficher les cases disponibles en vertical pour le joueur noir
     * @param ligne pour intialiser la ligne sur laquelle le joueur clique
     * @param colonne pour intialiser la colonne sur laquelle le joueur clique**/
    public void afficheCasesDispoVerticaleNoir(int ligne, int colonne){
        //boolean pour ne pas afficher les points d'interrogation dès qu'il y a une tour sur le chemin
        boolean piece = false;
        for (int i = 7; i >= 0; i--) {
            if (piece)
                break;
            for (int j = 7; j >= 0; j--) {
                //si i est plus petit que la ligne, que j est égale à la colonne et que le joueur est noir
                if (i < ligne && j == colonne &&
                        (getModel().getGrille().couleurJoueur(ligne, colonne, "noir"))) {
                    //si la case (i,j) ne contient pas de tour
                    if (tourSurCaseDansVue(i,j)) {
                        //alors on affiche les points d'interrogation et la bordure des boutons devient noir
                        changerCouleurBordure(i, j, getBlack(), 1);
                        afficheImgPoint(i, j);
                    } else
                        piece = true;
                }
            }
        }
    }
    /**Méthode pour afficher les cases disponibles en diagonal pour le joueur blanc
     * @param ligne pour intialiser la ligne sur laquelle le joueur clique
     * @param colonne pour intialiser la colonne sur laquelle le joueur clique**/
    public void afficheCasesDispoDiagonaleBlanc(int ligne, int colonne) {
        //boolean pour ne pas afficher les points d'interrogation dès qu'il y a une tour sur le chemin
        int depY;
        int depX;
        boolean piece = false;
        for (int i = ligne; i < 8; i++) {
            if (piece)
                break;
            for (int j = 0; j < 8; j++) {
                if (piece)
                    break;
                depY = j - colonne;
                depX = i - ligne;
                //vérification que le déplacement soit correct
                if (depY == depX || depY == -depX || -depY == depX) {
                    //si le déplacement Y et X sont positifs (diagonal vers la droite) et que i est plus
                    // grand que ligne et que le joueur est blanc
                    if ((depY > 0 && depX > 0) && (i > ligne) &&
                            (getModel().getGrille().couleurJoueur(ligne, colonne, "blanc"))) {
                        //si la case (i,j) ne contient pas de tour
                        if (tourSurCaseDansVue(i,j)) {
                            //alors on affiche les points d'interrogation et la bordure des boutons devient noir
                            changerCouleurBordure(i, j, getBlack(), 1);
                            afficheImgPoint(i, j);
                        } else
                            piece = true;
                    }
                }
            }
        }
        piece = false;
        for (int i = ligne; i < 8; i++) {
            if (piece)
                break;
            for (int j = 0; j < 8; j++) {
                if (piece)
                    break;
                depY = j - colonne;
                depX = i - ligne;
                //vérification que le déplacement soit correct
                if (depY == depX || depY == -depX || -depY == depX) {
                    //si le déplacement Y et X sont positifs (diagonal vers la gauche) et que i est plus
                    // grand que ligne et que le joueur est blanc
                    if ((depX > 0 && depY < 0) &&
                            (getModel().getGrille().couleurJoueur(ligne, colonne, "blanc"))) {
                        //si la case (i,j) ne contient pas de tour
                        if (tourSurCaseDansVue(i,j)) {
                            //alors on affiche les points d'interrogation et la bordure des boutons devient noir
                            changerCouleurBordure(i, j, getBlack(), 1);
                            afficheImgPoint(i, j);
                        } else
                            piece = true;
                    }
                }
            }
        }
    }
    /**Méthode pour afficher les cases disponibles en diagonal pour le joueur noir
     * @param ligne pour intialiser la ligne sur laquelle le joueur clique
     * @param colonne pour intialiser la colonne sur laquelle le joueur clique**/
    public void afficheCasesDispoDiagonaleNoir(int ligne, int colonne) {
        int depY;
        int depX;
        boolean piece = false;
        //si le joueur est noir
        if (getModel().getGrille().couleurJoueur(ligne, colonne, "noir")) {
            for (int i = 7; i >= 0; i--) {
                if (piece)
                    break;
                for (int j = 7; j >= 0; j--) {
                    if (piece)
                        break;
                    depY = j - colonne;
                    depX = i - ligne;
                    //vérification du déplacement
                    if (depY == depX || depY == -depX || -depY == depX) {
                        //si le déplacement Y est inferieur à 0 et deplacement X inferieur à 0
                        if ((depY < 0 && depX < 0)) {
                            //si la case (i,j) ne contient pas de tour
                            if (tourSurCaseDansVue(i,j)) {
                                //alors on affiche les points d'interrogation et la bordure des boutons devient noir
                                changerCouleurBordure(i, j, getBlack(), 1);
                                afficheImgPoint(i, j);
                            } else
                                piece = true;
                        }
                    }
                }
            }
        }
        piece = false;
        //si le joueur est noir
        if (getModel().getGrille().couleurJoueur(ligne, colonne, "noir")) {
            for (int i = 7; i >= 0; i--) {
                if (piece)
                    break;
                for (int j = 7; j >= 0; j--) {
                    if (piece)
                        break;
                    depY = j - colonne;
                    depX = i - ligne;
                    if (depY == depX || depY == -depX || -depY == depX) {
                        //si le déplacement Y est supèrieur à 0 et deplacement X inferieur à 0
                        if ((depX < 0 && depY > 0)) {
                            //si la case (i,j) ne contient pas de tour
                            if (tourSurCaseDansVue(i,j)) {
                                //alors on affiche les points d'interrogation et la bordure des boutons devient noir
                                changerCouleurBordure(i, j, getBlack(), 1);
                                afficheImgPoint(i, j);
                            } else
                                piece = true;
                        }
                    }
                }
            }
        }
    }
    /**Méthode pour afficher les cases disponibles en diagonal pour le joueur noir
     * @param ligne pour intialiser la ligne sur laquelle le joueur clique
     * @param colonne pour intialiser la colonne sur laquelle le joueur clique
     * @param couleurJoueur pour initilialiser la couleur du joueur
     * @param couleurTour pour initialiser la couleur de la tour
     * @exception PasDeCaseDispoException afin de générer un message informatif si il n'y a pas de case disponible**/
    public boolean aucuneCaseDispo(int ligne,int colonne, String couleurJoueur, String couleurTour)
            throws PasDeCaseDispoException{
        for (int i = 0; i < 8; i++) {
            for (int j = 0; j < 8; j++) {
                //si l'icone sur la case (i,j) est différent que l'cone sur lequel l ejoueur à cliqué
                //et que l'icone sur le case (i,i) n'est pas nul
                if(iconSurCase(i,j) != iconSurCase(ligne,colonne) && iconSurCase( i, j) != null)
                    //si la case (i,j) ne contient pas de tour
                    if (tourSurCaseDansVue(i,j)){
                        return true;
                }
           }
        }
        throw new PasDeCaseDispoException(couleurJoueur,couleurTour);
    }
    /**Méthode générer une erreur au cas ou déplacement n'est pas bon, c'est-à-dire si le joueur ne clique
     * pas sur un point d'interrogation
     * @param ligne pour intialiser la ligne sur laquelle le joueur clique
     * @param colonne pour intialiser la colonne sur laquelle le joueur clique
     * @exception DeplacementImpossibleException afin de générer un message d'erreur si le deplacement ne respecte
     * pas les rêgles**/
    public boolean isValidDeplacement(int ligne, int colonne) throws DeplacementImpossibleException{
        //si l'icone sur la case (ligne,colonne) est null alors on génère l'exception
        if(iconSurCase(ligne,colonne) == null){
            throw new DeplacementImpossibleException();
        }
        return true;
    }
    /**Méthode pour retirer les points d'interogations et les bordures noires des cases**/
    public void removeCasesDispo() {
        for (int i = 0; i < 8; i++) {
            for (int j = 0; j < 8; j++) {
                //si la case (i,j) ne contient pas de tour
                if (tourSurCaseDansVue(i,j)) {
                    //mettre en noir les bordures des cases et les cases ne contiennent plus d'icone
                    changerCouleurBordure(i,j,getWhite(),0);
                    getTabPlateau()[i][j].setIcon(null);
                }
            }
        }
    }
    /**Méthode générer une erreur au cas ou la 1ere case cliquée est vide
     * @param icon pour intialiser l'icone
     * @exception CaseVideException afin de générer un message d'erreur si la case est vide**/
    public boolean isValidIconSurCase(ImageIcon icon) throws CaseVideException{
        if(icon == null)
            throw new CaseVideException();
        else
            return true; }
    /**Méthode pour afficher les bordures des cases
     * @param i pour intialiser la ligne sur laquelle le joueur clique
     * @param j pour intialiser la colonne sur laquelle le joueur clique
     * @param color pour intialiser la couleur de la bordure
     * @param k pour intialiser l'épaisseur du trait**/
    public void changerCouleurBordure(int i,int j,Color color,int k){
        getTabPlateau()[i][j].setBorder(BorderFactory.createLineBorder(color, k)); }
    /**Méthode pour afficher les points d'interrogations
     * @param i pour intialiser la ligne sur laquelle le joueur clique
     * @param j pour intialiser la colonne sur laquelle le joueur clique**/
    public void afficheImgPoint(int i, int j){
        getTabPlateau()[i][j].setIcon(getIconePoint());}
    /**Méthode pour savoir si une case contient une tour ou pas
     * @param i pour intialiser la ligne
     * @param j pour intialiser la colonne **/
    public boolean tourSurCaseDansVue(int i, int j){
        return getModel().getGrille().getTourSurCase(i,j) == null; }
    /*----------------------------------------------------------------------------------------------------------------*/
    /*---------------------------------------------METHODE POUR IA----------------------------------------------------*/
    /**Méthode pour générer le déplaceement de la IA
     * @param ligne pour intialiser la ligne sur laquelle le joueur clique
     * @param colonne pour intialiser la colonne sur laquelle le joueur clique**/
    public String deplaceTourIA(int ligne, int colonne) {
        //déclaration d'objet case, position et tour , et un icon
        Position arrivee;
        Icon iconDep;
        Tour tourTemp;
        Case caseTemp;
        //initialisation de icon, tour
        iconDep = getTabPlateau()[ligne][colonne].getIcon();
        tourTemp = getModel().getGrille().getCase(ligne,colonne).getTour();
        //enlever l'icone de la case ou l'on clique
        getModel().getGrille().getCase(ligne,colonne).setCase(null);
        getTabPlateau()[ligne][colonne].setIcon(null);

        //initialisation des types de déplacement que peut faire la IA
        int x = ligne-1;
        int y;
        if (getTabPlateau()[ligne-1][colonne].getIcon() == getIconePoint()) {
            y = colonne;
        } else {
            if(colonne == 7){
                y = colonne-1;
            } else if(colonne == 0){
                y = colonne+1;
            } else
                if(getTabPlateau()[ligne-1][colonne-1].getIcon() == getIconePoint()){
                    y = colonne-1;
                }else
                    y = colonne+1;
        }
        //la caseTemp prend la nouvelle coordonnée
        caseTemp = getModel().getGrille().getCase(x, y);
        getModel().getGrille().getCase(x, y).setCase(tourTemp);
        //une nouvelle position à l'arrivée est créée
        arrivee = new Position(x, y);
        //icone est ajouté à la nouvelle coordonnée
        getTabPlateau()[x][y].setIcon(iconDep);
        //boucles pour retirer les points d'interrogations
        for (int i = 0; i < getTabPlateau().length; i++) {
            for (int j = 0; j < getTabPlateau().length; j++) {
                changerCouleurBordure(i, j, getWhite(), 0);
                if (iconSurCase(i, j) == getIconePoint()) {
                    getTabPlateau()[i][j].setIcon(null); }
            }
        }
        //gestion de la couleur de la nouvelle couleur de la case à la position à l'arrivée pour la récupérer pour le
        //joueur blanc
        Color color = getTabPlateau()[arrivee.getLigne()][arrivee.getColonne()].getBackground();
        for (int k = 0; k < 8; k++) {
            if (color == getTabColor()[k]) {
                caseTemp.setCouleurCase(getModel().getGrille().initTabCouleur()[k]);
                colCase = caseTemp.getCouleurCase();
                return getColCase();
            }
        }
        return getColCase();
    }
    /*----------------------------------------------------------------------------------------------------------------*/
    /*-----------------------------------------------METHODES MENU----------------------------------------------------*/
    /**Methode création menu**/
    public void creerMenu() {
        //création du menu
        //ajout de l'item nouvelle partie
        getMenu().add(getItemNewPartie());
        //ajout de l'item nouvelle partie avec IA
        getMenu().add(getItemNewPartieAvecIA());
        getBarMenu().add(getMenu());
        setJMenuBar(getBarMenu());
    }
    /*----------------------------------------------------------------------------------------------------------------*/
    /*---------------------------------------------NOUVELLE PARTIE----------------------------------------------------*/
    /**Methode pour nouvelle partie**/
    public void NouvellePartie(){
        this.getContentPane().removeAll();
        this.dispose();
    }
    /*----------------------------------------------------------------------------------------------------------------*/
    /*------------------------------------------------GETTER----------------------------------------------------------*/
    //MODEL
    public Model getModel() { return model; }
    //getter des couleurs
    //couleur joueur
    public static Color getWhite() { return white; }
    public static Color getBlack() { return black; }
    //couleur tour
    public static Color getBleu() { return bleu; }
    public static Color getVert() { return vert; }
    public static Color getJaune() { return jaune; }
    public static Color getOrange() { return orange; }
    public static Color getRose() { return rose; }
    public static Color getRouge() { return rouge; }
    public static Color getGris() { return gris; }
    public static Color getViolet() { return violet; }
    //TOURS
    //nom
    public String getNom() { return nom; }
    //getter des tours
    public ImageIcon getTourNoir() { return tourNoir; }
    public ImageIcon getTourBlanc() { return tourBlanc; }
    //récupération de l'icone sur la case
    public Icon iconSurCase(int i,int j){ return getTabPlateau()[i][j].getIcon(); }
    //getter pour l'image point interrogation
    public ImageIcon getIconePoint() { return iconePoint; }
    //getters des couleurs des tours et joueurs
    public String[] getCouleurBlanc() { return couleurBlanc; }
    public String[] getCouleurNoir() { return couleurNoir; }
    public String getNoir() { return noir; }
    public String getBlanc() { return blanc; }
    //GAGNANT
    //getter image gagnant
    public ImageIcon getImgGagne() { return ImgGagne; }
    //getter des réponses lorsque la partie est fini
    public String[] getReponse() { return reponse; }
    //IA
    //recupération de la couleur de la case pour la ia
    public String getColCase() { return colCase; }
    //MENU
    public JMenuItem getItemNewPartieAvecIA() { return itemNewPartieAvecIA; }
    public JMenuItem getItemNewPartie() { return itemNewPartie; }
    public JMenu getMenu() { return menu; }
    public JMenuBar getBarMenu() { return barMenu; }
    //CASES
    //getter couleur des cases
    public Color[] getTabColor() { return tabColorCases; }
    //getter tableau de JButton = plateau
    public JButton[][] getTabPlateau() { return this.tabPlateau; }
    //getter compteur
    public int getCount() { return count; }
    /*----------------------------------------------------------------------------------------------------------------*/
}







