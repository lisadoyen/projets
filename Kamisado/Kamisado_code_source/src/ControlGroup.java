/**création classe pour regrouper le ControlBouton et le ControlMenu**/
public class ControlGroup {

    //ATTRIBUTS
    private Model model;
    private Vue vue;
    public ControlBouton controlBut;
    public ControlMenu controlMenu;

    //ATTRIBUTS
    /**Constructeur de ControlGroup**/
    public ControlGroup() {
        //initialisation des attributs
        this.model = new Model();
        vue = new Vue(model);
        controlMenu = new ControlMenu(vue, model);
        controlBut = new ControlBouton(vue, model);
    }

    //getter du model
    public Model getModel(){ return model; }

}
