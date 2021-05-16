import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

/**cration classe ControlMenu pour ajouter un ActionListener sur le bouton menu, création interaction avec le joueur**/
public class ControlMenu implements ActionListener {

    private Vue vue;
    private Model model;

    /**Constructeur de ControlMenu
     * @param vue initialise la vue
     * @param model initialise le model**/
    public ControlMenu(Vue vue, Model model) {
        this.vue = vue;
        this.model = model;
        //appelle de la méthode
        this.vue.setControlMenu(this);
    }

    /**Methode pour effectuer une action sur le menu
     * @param actionEvent initalise sur quel bouton du menu les joueurs appuient**/
    @Override
    public void actionPerformed(ActionEvent actionEvent) {
        //si c'est le bouton "nouvelle partie" qui est selectionné
        if(actionEvent.getSource() == getVue().getItemNewPartie()) {
            //une nouvelle partie se lance
            getVue().NouvellePartie();
            ControlGroup controlGroup = new ControlGroup();
            //la IA n'est pas activée
            controlGroup.getModel().setAvecIA(false);
         //si c'est le bouton "nouvelle partie avec IA" qui est selectionné
        }if(actionEvent.getSource() == getVue().getItemNewPartieAvecIA()){
            //une nouvelle partie se lance avec IA
            getVue().NouvellePartie();
            ControlGroup controlGroup = new ControlGroup();
            //la IA est activée
            controlGroup.getModel().setAvecIA(true);
        }
    }

    //getter de vue
    public Vue getVue() { return vue; }
}
