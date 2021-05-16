/**création de la classe Case pour gérer leur couleurs et si elle sont occupées pas une tour**/
class Case {

    //ATTRIBUTS
    //objet Tour
    private Tour tour;
    //couleur de la case
    private String couleurCase;

    //METHODES
    /**Constructeur vide**/
    Case() {}
    /**Constructeur de Case
     * @param tour pour iniialisé une tour sur la case**/
    Case(Tour tour) { this.tour = tour; }

    /**méthodes pour retouré la couleur de la tour sur la case
     * @param tour pour initialisé la tour**/
    public String getCouleurJoueurSurCase(Tour tour) { return tour.getCouleurJoueur(); }

    //getters et setters des attributs
    //gettter et setter pour la couleur de la case
    public String getCouleurCase() { return couleurCase; }
    public void setCouleurCase(String couleurCase) { this.couleurCase = couleurCase; }
    //getter et setter de la tour sur la case
    public void setCase(Tour tour){ this.tour = tour; }
    public Tour getTour() { return tour; }

}