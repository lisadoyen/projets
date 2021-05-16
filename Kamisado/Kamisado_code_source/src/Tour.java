/**création de la classe Tour pour gérer leurs couleurs (joueur et case) et si le déplaceement est valide**/
class Tour {

    //ATRIBUTS
    //couleur du joueur
    private String couleurJoueur;
    //couleur de la tour
    private String couleurTour;

    //METHODES
    /**Consructeur de Tour
     * @param couleurJoueur pour initialiser la couleur du joueur
     * @param couleurTour pour initialiser la couleur de la tour**/
    Tour(String couleurJoueur, String couleurTour) {
        this.couleurJoueur = couleurJoueur;
        this.couleurTour = couleurTour;
    }


    /**méthode pour valider si le déplacement est correct en vertical
     * @param deplacement pour initialiser le déplacement à effectuer**/
    public boolean estValideVertical(Deplacement deplacement) {
        //si le deplacement en Y est égale à 0 == la colonne reste la meme que la tour
        if(deplacement.getDeplacementY() == 0) {
            for (int i = 0; i < 8; i++) {
                for (int j = 0; j < 8; j++) {
                    //si le joueur est blanc
                    if (this.getCouleurJoueur().equals("blanc")) {
                        //si le deplacement en X est superieur à 0
                        if (deplacement.getDeplacementX() > 0) {
                                return true; }
                    //si le joueur est noir
                    } else {
                        //si le deplacement en X est inferieur à 0
                        if (deplacement.getDeplacementX() < 0) {
                            return true; }
                    }
                }
            }
        }
        return false;
    }

    /**méthode pour valider si le déplacement est correct en diagonal
     * @param deplacement pour initialiser le déplacement à effectuer**/
    public boolean estValideDiagonal(Deplacement deplacement) {
        //on calcule le déplacement à effectué (diagonal)
        boolean dep1 = deplacement.getDeplacementY() == deplacement.getDeplacementX();
        boolean dep2 = deplacement.getDeplacementY() == -deplacement.getDeplacementX();
        boolean dep3 = -deplacement.getDeplacementY() == deplacement.getDeplacementX();
        //si le déplacement est respecté
        if( dep1 || dep2 || dep3  ) {
            for (int i = 0; i < 8; i++) {
                for (int j = 0; j < 8; j++) {
                    //si le joueur est blanc
                    if (this.getCouleurJoueur().equals("blanc")) {
                        //si depY est superieur à 0 et depX (vers la droite) est superieur à 0 ou si depY est
                        //superieur à 0 et depY inferieur à 0 (vers la gauche)
                        if ((deplacement.getDeplacementY() > 0 && deplacement.getDeplacementX() > 0)
                        || (deplacement.getDeplacementX() > 0 && deplacement.getDeplacementY() < 0)){
                            return true;}
                    //si le joueur est noir
                    } else {
                        //si depY est inferieur à 0 et depX (vers la gauche) est inferieur à 0 ou si depY est
                        //superieur à 0 et depY inferieur à 0 (vers la droite)
                        if (deplacement.getDeplacementX() < 0 && deplacement.getDeplacementY() < 0
                                || (deplacement.getDeplacementX() < 0 && deplacement.getDeplacementY() > 0) ) {
                            return true;
                        }
                    }
                }

            }
        }
        return false;
    }

    //getter des attributs
    public String getCouleurJoueur() { return couleurJoueur; }
    public String getCouleurTour() { return couleurTour; }

}


