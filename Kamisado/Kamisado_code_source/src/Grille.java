/**création de la classe grille, elle va contenir l'ensemble des cases formant le jeu**/
class Grille {

    //ATTRIBUTS
    //tableau de cases qui forment la grille de jeu
    private Case[][] grille;
    //tableau de String contenant les couleurs des tours blanches (dans l'ordre de la ligne 0)
    private  String[] tabCouleurBlanc;

    //METHODES
    /**Constructeur de Grille**/
    public Grille() {
        //initialisation de la grille, dimension 8x8
        grille = new Case[8][8];
        for (int ligne = 0; ligne <= 7; ligne++)
            for (int colonne = 0; colonne <= 7; colonne++)
                getGrille()[ligne][colonne] = new Case();

    }
    /**Méthode pour initialiser et retourner le tableau de couleurs des tours blanches sur la ligne 0**/
    public String[] initTabCouleur(){
        return tabCouleurBlanc = new String[]{"gris", "vert", "rouge", "jaune", "rose", "violet", "bleu", "orange"};
    }

    /**Méthode qui initialise les tours sur les cases de départ**/
    public void debuter() {
        initTabCouleur();
        //pour les tours blanches
        for(int j=0;j<8;j++)
            getGrille()[0][j].setCase(new Tour("blanc", getTabCouleurBlanc()[j]));
        //pour les tours noires
        String[] tabCouleurNoir = new String[]{ "orange", "bleu", "violet","rose","jaune","rouge", "vert", "gris"};
        for(int k=0;k<8;k++)
        getGrille()[7][k].setCase(new Tour("noir",  tabCouleurNoir[k]));

    }

    /**Méthode qui permet de retourner la tour sur la case souhaitée
     * @param ligne initialise la ligne sur laquelle le joueur clique
     * @param colonne initialise la colonne sur laquelle le joueur clique**/
    public Tour getTourSurCase(int ligne, int colonne) { return grille[ligne][colonne].getTour(); }

    /**Méthode qui permet de vérifier si la couleur du joueur est correcte
     * @param ligne initialise la ligne sur laquelle le joueur clique
     * @param colonne initialise la colonne sur laquelle le joueur clique
     * @param couleur initialise la couleur**/
    public boolean couleurJoueur(int ligne, int colonne, String couleur){
        return getCase(ligne, colonne).getTour().getCouleurJoueur().equals(couleur);
    }

    /**Méthode qui permet de vérifier si le déplacement est correct
     * @param ligne initialise la ligne sur laquelle le joueur clique
     * @param colonne initialise la colonne sur laquelle le joueur clique
     * @exception  DeplacementImpossibleException génère une exception si le déplacement n'est pas
     * conforme aux règles**/
    public boolean tourSurCase(int ligne, int colonne) throws DeplacementImpossibleException{
        if(getTourSurCase(ligne, colonne) == null)
            return true;
        else
            throw new DeplacementImpossibleException();
    }

    /**Méthode qui permet de vérifier si la couleur du joueur est correcte
     * @param ligne initialise la ligne sur laquelle le joueur clique
     * @param colonne initialise la colonne sur laquelle le joueur clique
     * @param tour initialise la couleur
     * @param couleurJoueurTemp initialise la couleur du joueur
     * @exception ChangementJoueurException génère l'exception si la couleur n'est pas correcte**/
    public boolean isValidCouleurJoueur(int ligne, int colonne, Tour tour, String couleurJoueurTemp)
            throws ChangementJoueurException{
        if(getCase(ligne, colonne).getCouleurJoueurSurCase(tour).equals(couleurJoueurTemp))
            return true;
        else
            throw new ChangementJoueurException(couleurJoueurTemp);

    }

    /**Méthode qui permet de vérifier si la couleur de la tour est correcte
     * @param ligne initialise la ligne sur laquelle le joueur clique
     * @param colonne initialise la colonne sur laquelle le joueur clique
     * @param couleurTourTemp initialise la couleur de la tour
     * @exception ChangementTourException génère l'exception si la couleur n'est pas correcte**/
    public boolean isValidCouleurTour(int ligne, int colonne,String couleurTourTemp)
            throws ChangementTourException{
        if(getCase(ligne, colonne).getTour().getCouleurTour().equals(couleurTourTemp))
            return true;
        else
            throw new ChangementTourException(couleurTourTemp);
    }

    /**Méthode qui permet de vérifier si la couleur de la tour est correcte
     * @param ligne initialise la ligne sur laquelle le joueur clique
     * @param k initialise le numéro souhaité
     * @param tour initialise la tour
     * @param couleur initialise la couleur
     * @exception JoueurGagneException génère l'exception si la couleur n'est pas correcte**/
    public boolean aGagnee(int ligne, int k, Tour tour, String couleur) throws JoueurGagneException{
        if (ligne == k && tour.getCouleurJoueur().equals(couleur)){
            throw new JoueurGagneException(couleur);
        }else
            return false;
    }

    /**Méthode qui retourne la case sur laquelle le joueur clique
     * @param ligne initialise la ligne sur laquelle le joueur clique
     * @param colonne initialise la colonne sur laquelle le joueur clique**/
    public Case getCase(int ligne, int colonne) {
        return getGrille()[ligne][colonne];
    }

    //getter des attributs
    public Case[][] getGrille() { return grille; }
    public String[] getTabCouleurBlanc() { return tabCouleurBlanc; }
}
