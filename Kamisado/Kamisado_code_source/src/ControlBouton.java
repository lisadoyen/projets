import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

/**cration classe ControlBouton pour ajouter un ActionListener sur les boutons du plateau,
 * création interaction avec le joueur**/
public class ControlBouton implements ActionListener {

    //ATTRIBUTS
    //déclaration vue
    private Vue vue;
    //déclaration model
    private Model model;
    //déclaration d'un JButton
    private JButton bTemp = null;
    //déclaration objets tampon
    private Position positionDep;
    private Position positionArrivee;
    private Tour tourTemp = null;
    private Deplacement deplacement;
    private Case caseTemp = null;

    //déclaration Icones tampon
    private ImageIcon iconTemp = null;
    //déclaration de plusieurs variables tampons pour gérer les couleurs des joueurs et cases
    private String sColorCaseTemp;
    private String sColorJoueurTemp = "blanc";
    //declaration variable couleur pour récupérer la couleur de la case des boutons dans la vue
    private Color colorTemp;
    //déclaration variable Couleur pour les joueurs
    private Color white = Vue.getWhite();
    private Color black = Vue.getBlack();
    private String[] tabColor;

    //METHODES
    /**Constructeur de ControlBouton**/
    public ControlBouton(Vue vue, Model model) {
        this.vue = vue;
        this.model = model;
        //appelle de la méthode dans la classe Vue
        this.getVue().setControlButton(this);
    }

    /**Methode pour effectuer une action sur les boutons du plateau
     * @param actionEvent initalise sur quel bouton du menu les joueurs appuient**/
    @Override
    public void actionPerformed(ActionEvent actionEvent) {
        //création JButton
        JButton button = (JButton) actionEvent.getSource();
        //initialisation variable grille
        Grille grille = getModel().getGrille();
        tabColor = grille.initTabCouleur();

        //déclaration variables
        int ligneClic;
        int colonneClic;
        int posDepLigne;
        int posDepCol;
        int posArrLigne;
        int posArrCol;

        //boucle
        for (int i = 0; i < getVue().getTabPlateau().length; i++) {
            for (int j = 0; j < getVue().getTabPlateau()[i].length; j++) {
                //je détermine sur quelle JButton le joueur à cligué
                if (actionEvent.getSource() == vue.getTabPlateau()[i][j]) {
                    //je récupère les coordonnées de la case
                    ligneClic = i;
                    colonneClic = j;
                    getVue().count++;
                    //lorsque le joueur appuie la premiere fois sur un bouton, la grille est initialisée avec les tours
                    // sur les cases
                    if (getVue().getCount() == 1) {
                        grille.debuter(); }
                    //PREMIER BOUTON
                    if (getbTemp() == null) {
                        //l''icone tampon est l'icone de la tour
                        iconTemp = (ImageIcon) getVue().iconSurCase(ligneClic,colonneClic);
                        try {
                            //si le joueur clique sur une case non vide
                            getVue().isValidIconSurCase(getIconTemp());
                        } catch (CaseVideException e) {
                            getVue().creerDialogErr(e.getMessage());
                        }
                        if (getIconTemp() != null) {
                            //iitialisation des objets tampons
                            bTemp = button;
                            positionDep = new Position(ligneClic, colonneClic);
                            tourTemp = grille.getCase(ligneClic, colonneClic).getTour();
                            caseTemp = new Case(getTourTemp());
                            posDepLigne = getPositionDep().getLigne();
                            posDepCol = getPositionDep().getColonne();

                            //si le compteur est égal à 1 ou la couleur de la case est null
                            if (getVue().getCount() == 1 || sColorCaseTemp == null) {
                                //la couleur de la case prend la couleur de la tour sur celle-ci
                                getCaseTemp().setCouleurCase(getTourTemp().getCouleurTour());
                                sColorCaseTemp = getCaseTemp().getCouleurCase();
                            }
                            try {
                                //si la couleur du joueur est valide
                                if (grille.isValidCouleurJoueur(ligneClic, colonneClic, getTourTemp(),
                                        getsColorJoueurTemp())) {
                                    //la bordure le la case sélectionnée devient noir
                                    getVue().changerCouleurBordure(ligneClic, colonneClic, getBlack(), 1);
                                    //le joueur change pour le tour suivant
                                    changeJoueur("noir");

                                    try {
                                        //si la couleur de la tour est valide
                                        if (grille.isValidCouleurTour(ligneClic, colonneClic, getsColorCaseTemp())){
                                            //on affiche les cases disponibles
                                            getVue().afficheCasesDispoVerticaleBlanc(ligneClic, colonneClic);
                                            getVue().afficheCasesDispoVerticaleNoir(ligneClic, colonneClic);
                                            getVue().afficheCasesDispoDiagonaleBlanc(ligneClic, colonneClic);
                                            getVue().afficheCasesDispoDiagonaleNoir(ligneClic, colonneClic);

                                            try {
                                                //vérification qu'il n'y a au moins un deplacement possible
                                                if (!getVue().aucuneCaseDispo(ligneClic, colonneClic,
                                                        getsColorJoueurTemp(), getsColorCaseTemp())) {
                                                    System.out.println("le déplacement est possible"); }
                                            } catch (PasDeCaseDispoException p) {
                                                //sinon la bordure devient blanche
                                                //le joueur passe son tour et c'est au tour de l'autre joueur de jouer
                                                //avec la tour dont la couleur correspond à la couleur de la case
                                                //de sa tour précédente
                                                getVue().changerCouleurBordure(posDepLigne, posDepCol,
                                                        getWhite(), 0);
                                                bTemp = null;
                                                getVue().creerDialogInfo(p.getMessage());
                                                break; }

                                            //si la IA est activée
                                            if (getModel().isValidIA()) {
                                                if (getsColorJoueurTemp().equals("blanc")) {
                                                    //le déplacement est effectué
                                                    getVue().deplaceTourIA(ligneClic, colonneClic);
                                                    //la couleur de la case tempon prend la couleur de la
                                                    //case d'arrivée de la IA
                                                    sColorCaseTemp = getVue().getColCase();
                                                    try {
                                                        //vérifier si la IA gagne
                                                        grille.aGagnee((ligneClic-1), 0,
                                                                getTourTemp(), "noir");
                                                    } catch (JoueurGagneException jg) {
                                                        //si elle gagne message de fin arrive
                                                        getVue().creerDialogVainqueur(jg.getMessage());
                                                    }
                                                    //le joueur change pour le tour suivant
                                                    changeJoueur("blanc");
                                                    deplacement = null;
                                                    init();
                                                    break;
                                                }
                                            }
                                        }
                                    //si la couleur tour est fausse => l'excpetion est générée et affichée dans
                                    //une fenetre de dialogue
                                    } catch (ChangementTourException ct) {
                                        getVue().changerCouleurBordure(posDepLigne, posDepCol, getWhite(), 0);
                                        getVue().creerDialogErr(ct.getMessage());
                                        bTemp = null;
                                        changeJoueur("noir");
                                    }
                                }
                            //si la couleur joueur est fausse => l'excpetion est générée et affichée dans
                             //une fenetre de dialogue
                            } catch (ChangementJoueurException cj) {
                                if(getsColorCaseTemp() == getCaseTemp().getCouleurCase()){
                                    sColorCaseTemp = null;
                                }
                                getVue().changerCouleurBordure(posDepLigne, posDepCol, getWhite(), 0);
                                getVue().creerDialogErr(cj.getMessage());
                                deplacement = null;
                                init();
                                break;
                            }
                        }
                    //DEUXIEME BOUTON
                    } else {
                        //initialisation de la position d'arrivée et du déplacement
                        positionArrivee = new Position(ligneClic, colonneClic);
                        deplacement = new Deplacement(getPositionDep(), getPositionArrivee());
                        posDepLigne = getPositionDep().getLigne();
                        posDepCol = getPositionDep().getColonne();
                        posArrLigne = getPositionArrivee().getLigne();
                        posArrCol = getPositionArrivee().getColonne();

                        try {
                            //si le deplacement est valide
                            if (getVue().isValidDeplacement(posArrLigne, posArrCol) && (grille.tourSurCase(i, j))
                                    && (getTourTemp().estValideDiagonal(getDeplacement())
                                    || getTourTemp().estValideVertical(getDeplacement())
                                    || !getDeplacement().isNul())) {

                                //la case à la position de départ ne contient plus de tour
                                grille.getCase(posDepLigne, posDepCol).setCase(null);
                                //la case à la position de départ a les bordures blanches
                                getVue().changerCouleurBordure(posDepLigne, posDepCol, getWhite(), 0);
                                //la case à la position d'arrivée prend récupère la tour/icon de départ
                                getVue().getTabPlateau()[posArrLigne][posArrCol].setIcon(getIconTemp());
                                grille.getCase(posArrLigne, posArrCol).setCase(getTourTemp());
                                //la case à la position d'arrivée a les bordures blanches
                                getVue().changerCouleurBordure(posArrLigne, posArrCol, getWhite(), 0);
                                //la case à la position de départ ne contient plus d'icon
                                getVue().getTabPlateau()[posDepLigne][posDepCol].setIcon(null);
                                //on enleve tous les points d'interrogations (cases disponibles)
                                getVue().removeCasesDispo();

                                try {
                                    //vérification que l'un des joueurs ne gagne pas
                                    grille.aGagnee(ligneClic, 0, getTourTemp(), "noir");
                                    grille.aGagnee(ligneClic, 7, getTourTemp(), "blanc");
                                } catch (JoueurGagneException jg) {
                                    //si il gagne => l'exception est générée et affichée dans une fenetre de dialogue
                                    getVue().creerDialogVainqueur(jg.getMessage());
                                }

                                //récupération de la couleur de la case
                                colorTemp = button.getBackground();
                                for (int k = 0; k < 8; k++)
                                    if (getColorTemp() == getVue().getTabColor()[k]){
                                        caseTemp.setCouleurCase(getTabColor()[k]);
                                        sColorCaseTemp = getCaseTemp().getCouleurCase();}
                                init();
                            }
                        //Si pas de déplacement possible
                        } catch (DeplacementImpossibleException d) {
                            //l'exception est générée et affichée dans une fenetre de dialogue
                            getVue().creerDialogErr(d.getMessage());
                            break;
                        }
                    }
                }
            }
        }
    }

    /**Methode qui permet de changer la couleur du joueur
     * @param couleurJoueur qui initialise la couleur**/
    public void changeJoueur(String couleurJoueur){
        if (sColorJoueurTemp ==  couleurJoueur)
            sColorJoueurTemp = "blanc";
        else
            sColorJoueurTemp =  couleurJoueur;
    }

    /**Méthode qui initialise des variables a null**/
    public void init(){
        tourTemp = null;
        iconTemp = null;
        positionDep = null;
        bTemp = null;
    }

    /*--------------------------------------------------GETTER--------------------------------------------------------*/
    public Vue getVue() { return vue; }
    public Model getModel() { return model; }
    public JButton getbTemp() { return bTemp; }
    public Position getPositionDep() { return positionDep; }
    public Position getPositionArrivee() { return positionArrivee; }
    public ImageIcon getIconTemp() { return iconTemp; }
    public Tour getTourTemp() { return tourTemp; }
    public Deplacement getDeplacement() { return deplacement; }
    public Case getCaseTemp() { return caseTemp; }
    public String getsColorCaseTemp() { return sColorCaseTemp; }
    public Color getColorTemp() { return colorTemp; }
    public String getsColorJoueurTemp() { return sColorJoueurTemp; }
    public Color getWhite() { return white; }
    public Color getBlack() { return black; }
    public String[] getTabColor() { return tabColor; }
    /*----------------------------------------------------------------------------------------------------------------*/

}










