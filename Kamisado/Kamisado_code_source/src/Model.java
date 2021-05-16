/**création de la classe model**/
public class Model {

    //ATTRIBUTS
    //initialisation de l'objet grille
    private Grille grille = new Grille();
    //création boolean pour pouvoir activer la IA
    private boolean avecIA;


    //METHODES
    /**Constructeur vide**/
    Model() {}

    //getter et setter pour l'atribut avecIA
    public boolean isValidIA(){ return this.avecIA; }
    public void setAvecIA(boolean avecIA) { this.avecIA = avecIA; }

    //getter de l'Objet Grille
    public Grille getGrille() { return grille; }
}
/*----------------------------------------------------EXECPTIONS------------------------------------------------------*/

/**création classe pour générer l'erreur de deplacement**/
class DeplacementImpossibleException extends Exception{

    DeplacementImpossibleException() {
        super(
                "<html><center>Le déplacement doit se faire uniquement en <strong style='color:red' >" +
                        "vertical</strong> ou <strong style='color:red'>diagonal</strong>!<br><br>" +
                        "De plus, il est impossible de <strongstyle='color:red'>dépasser une tour</strong> ou de " +
                        "<strong style='color:red'>poser la tour <br>selectionnée sur une autre tour</strong>" +
                        "!<br><br><strong style='color:red'>Cliquer 2 fois</strong> sur une case est également " +
                        "interdit!</center></html>"
        );
    }
}

/**création classe pour générer l'erreur du changement de joueur**/
class ChangementJoueurException extends Exception{

    ChangementJoueurException(String joueur) {
        super(
                "<html><center>C'est au tour du joueur <strong style='color:red'>" + joueur +"</strong> de jouer!" +
                        "</center></html>"
        );
    }
}

/**création classe pour générer l'erreur du changement de tour**/
class ChangementTourException extends Exception{

    ChangementTourException(String couleur) {
        super(
                "<html><center>La couleur de la tour n'est pas <strong style='color:red'>correcte</strong>!<br><br>"+
                        "Veuillez selectionner la tour de couleur <strong style='color:red'>" + couleur +
                        "</strong></center></html>"
        );
    }
}

/**création classe pour générer l'erreur de la case vide**/
class CaseVideException extends Exception{

    CaseVideException() {
        super(
                "<html><center>La case est <strong style='color:red'>vide</strong>! <br><br>" +
                        "Veuillez selectionner une case <strong style='color:red'>contenant une tour</strong>." +
                        "</center></html>"
        );
    }
}

/**création classe pour générer l'alerte lorsqu'un joueur a gagné**/
class JoueurGagneException extends Exception{

    JoueurGagneException(String couleurJoueur) {
        super(
                "<html><center>Le joueur <strong style='color:blue'>"+
                        couleurJoueur + "</strong> a gagné!<br><br>" +
                        "Voulez-vous faire une nouvelle partie?</center></html>"
        );
    }
}

/**création classe pour générer l'alerte lorsqu'il n'y a pas de case disponible pour déplacer sa tour**/
class PasDeCaseDispoException extends Exception{

    PasDeCaseDispoException(String couleurJoueur, String couleurTour) {
        super(
                "<html><center>Il n'y a <strong style='color:red'>pas de déplacement possible</strong>, par conséquent"
                        + " <br>le joueur passe son tour.<br><br>" +
                        "C'est au joueur de couleur <strong style='color:red'>" + couleurJoueur + " </strong>" +
                        "de jouer sa tour de couleur <strong style='color:red'><br>" + couleurTour +
                        "</strong>.<center></html>"
        );
    }
}