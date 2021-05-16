/**création de la classe position pour gérer les position des tours, cases, icones**/
class Position {

    //ATTRIBUTS
    //nuéro de ligne
    private int ligne;
    //numéro de colonne
    private int colonne;

    //METHODES
    /**Constructeur de l'objet Position
     * @param ligne pour la coordonnée de la ligne
     * @param colonne pour la coordonnée de la colonne**/
    public Position(int ligne, int colonne) {
        this.ligne = ligne;
        this.colonne = colonne; }

    //getters des attributs
    public int getLigne() { return ligne; }
    public int getColonne() { return colonne; }

}