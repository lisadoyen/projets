/**création de la classe Deplacement pour gérer les déplacements des tours**/
class Deplacement {
    //ATTRIBUTS
    //déplacement en ligne
    private int deplacementX;
    //déplacement en colonne
    private int deplacementY;
    //METHODES
    /**Constructeur de Deplacement
     * @param depart initialise la position de départ
     * @param arrivee initialise la position d'arrivée**/
    public Deplacement(Position depart, Position arrivee) {
        deplacementY = arrivee.getColonne() - depart.getColonne();
        deplacementX = arrivee.getLigne() - depart.getLigne();
    }
    /**Méthode pour savoir si le déplacement est nul**/
    public boolean isNul() {
        return deplacementX == 0 && deplacementY == 0;
    }
    //getters des attributs
    public int getDeplacementX() { return deplacementX; }
    public int getDeplacementY() { return deplacementY; }

}
