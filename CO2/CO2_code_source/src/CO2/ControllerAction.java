package CO2;

import javafx.event.ActionEvent;
import javafx.event.EventHandler;

import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Optional;
import java.util.Random;

public class ControllerAction implements EventHandler<ActionEvent>{
    Model model ;
    ViewGame viewGame ;

    public ControllerAction(Model model, ViewGame viewGame) {
        this.model = model ;
        this.viewGame = viewGame ;
        viewGame.hboxAction.setButtonActionControler(this);
    }

    @Override
    public void handle(ActionEvent event) {
        Object source = event.getSource() ;
        if (source == viewGame.hboxAction.btnActionPrincipale) {
            viewGame.hboxAction.displayActionPrincipale() ;
        } else if (source == viewGame.hboxAction.btnActionGratuite){
            viewGame.hboxAction.displayActionGratuite() ;
        } else if (source == viewGame.hboxAction.btnCancelAction) {
            viewGame.hboxAction.resetHbox();
        }else if (source == viewGame.hboxAction.btnFinTour) { // appuyer sur bouton fin de tour
            finTour();
        } else if (source == viewGame.hboxAction.btnDefausser) {
            model.getCurrentPLayer().gainArgent(8);
            model.getCurrentPLayer().getObjectifCompagnie().setId(-1);
            viewGame.reloadArgent();
            viewGame.reloadObjectifCompagnie();
            viewGame.hboxAction.resetHbox();
        }
        viewGame.reloadArgent();
    }

    private void distributionRevenu() {
        Player p = model.getCurrentPLayer();
        // pour chaque piste d'expertise
        for (PisteExpertise exp : model.getExpertises()) {
            // type d'energie
            greenEnergyTypes type = exp.getType();
            // niveau d'expertise du joueur dans ce type d'expertise
            int playerExp = p.getExpertise(type);
            // nombre de revenu correspondant
            int revenu = 0;
            if (playerExp > 0) revenu = exp.getPiste().get(playerExp-1).getNumero();

            // si il y a un revenu a distribuer
            if (revenu>0) {
                // boite de dialogue
                viewGame.hboxAction.dialogChoisirRevenu(type, revenu);
                if (viewGame.hboxAction.dialogChoisirRevenu != null) {
                    Optional<String> result = viewGame.hboxAction.dialogChoisirRevenu.showAndWait();
                    result.ifPresent(repartition -> {
                        // donne le revenu au joueur dans le model
                        model.giveRevenu(p, repartition);
                        viewGame.reloadArgent();
                        viewGame.reloadPointVictoire();
                        return;
                    });
                }
            }
        }
    }

    public void choisirScientifiqueExpertise() {
        viewGame.hboxAction.displayFinTourScientifiqueChoiceDialog() ;
        if(viewGame.hboxAction.dialogChoisirScientifique != null){
            Optional<Scientifique> result = viewGame.hboxAction.dialogChoisirScientifique.showAndWait();
            result.ifPresent(scientifiqueChoisi -> {
                model.getCurrentPLayer().addExpertise(scientifiqueChoisi.getSubject().getEnergy(), 1);
                viewGame.reloadPlayerExpertise(model.getCurrentPLayer());
                return;
            });
        }
    }

    public void finTour(){
        // si le scientifique n'est pas retourn?? dans la r??serve
        // l'expertise lors du retour d'un scientifique ?? la r??serve est g??r?? par le ControllerActionGratuite
        if (model.getCurrentPLayer().getCurrentScientifique().getContinent() != null){
            choisirScientifiqueExpertise();
        }
        // v??rification du nombre de tour et d??c??nnie
        model.TourSuivant();
        // si on est au tour 1 de n'importe quelle decenie sauf la premi??re
        if ((model.getTour() == 1) && (model.getDecade() != 1970)) {
            // ~= phase d'approvisionnement
            distributionRevenu();
            //approvisionnement en ??nergie
            ArrayList<Continent> continentsEnBesoin = new ArrayList<>();
            if(model.getDecade() == 1970){
                continentsEnBesoin = verifierNbCentral(1);
            }
            else if(model.getDecade() == 1980){
                continentsEnBesoin = verifierNbCentral(2);
            }
            else if(model.getDecade() == 1990){
                continentsEnBesoin = verifierNbCentral(3);
            }
            else if(model.getDecade() == 2000){
                continentsEnBesoin = verifierNbCentral(4);
            }
            else if(model.getDecade() == 2010){
                continentsEnBesoin = verifierNbCentral(5);
            }
            //Seulement pour le multi :
            else if(model.getDecade() == 2020){
                continentsEnBesoin = verifierNbCentral(6);
            }
            if(continentsEnBesoin.isEmpty()){ //Si aucun continent n'est en besoin de centrale
                //affichage d'un message
                viewGame.displayAlertWithoutHeaderText("Bien jou?? !", "Vous avez bien jou?? durant cette d??cennie. Aucun contient ne manque d'??nergie !");
            }
            else{ //Si il manque une/des centrale(s)s ?? un/des continent(s)
                manqueCentral(continentsEnBesoin);
            }
            resolutionEvenements();
        }
        model.endGame();

        // r??compense sommets
        SommetTile sommetFull = model.getCurrentSommetFull(); // r??cup??re le sommet fini
        if(sommetFull != null){
            if(model.giveRewardsSommet(sommetFull) != null) {
                viewGame.displayAlertWithoutHeaderText("Sommet", "un sommet est rempli! \n" + "les scientifiques sont redonner aux joueurs \n et vous recevez un point d'expertise sur chaque sujet du sommet. \n" +
                        "Vous recevez ??galement un point d'expertise suppl??mentaire  dans l'un des deux sujets du sommet de votre choix");
                viewGame.hboxAction.displayChoisirExpretiseSommetFini(sommetFull);
                if(viewGame.hboxAction.dialogExpertiseBonusExpertise != null) {
                    Optional<greenEnergyTypes> result = viewGame.hboxAction.dialogExpertiseBonusExpertise.showAndWait();
                    result.ifPresent(typesChoisi -> {
                        model.getCurrentPLayer().addExpertise(typesChoisi, 1);
                        viewGame.reloadPlayerExpertise(model.getCurrentPLayer());
                        return;
                    });
                }
                viewGame.reloadSommet(sommetFull); // on r??affiche un nouveau sommet
                for (int i = 0; i <model.getCurrentPLayer().getScientifiques().size(); i++) {
                    // d??place les scientifiques sur le sommet dans la r??serve
                    viewGame.deplacerScientifiqueReserve(model.getCurrentPLayer().getScientifiques().get(i).getImgScientifique(), i);
                }
            }
        }
        model.getCurrentPLayer().setActionPrincipaleDone(false);
        model.getCurrentPLayer().setDeplacerScientifiqueDone(false);
        model.getCurrentPLayer().setMarcheCEPDone(false);
        model.getCurrentPLayer().setCardDone(false);
        model.getCurrentPLayer().setActionMarche(0);
        viewGame.hboxAction.resetHbox();
        // actualisation du nombre de tour, de d??c??nnie, Ressources Techno, CEP, Point de Victoire, CO2, expertise
        viewGame.reloadTour();
        viewGame.reloadDecade();
        viewGame.reloadresourcesTech();
        viewGame.reloadCEPRessTech();
        viewGame.reloadPointVictoire();
        viewGame.reloadCo2();
        viewGame.reloadPlayerExpertise(model.getCurrentPLayer());
        // affichage sur la console le nombre de tour et d??c??nnie
        System.out.println("Tour : " + model.getTour() + "/" + (model.NB_TOUR_PAR_DECENNIE-1));
        System.out.println("D??c??nnie : " + model.getDecade() + "/" + model.NB_DECENNIE);
        // model.tilesSolarProjects.get(0).setSubventionPossible(false); // temporaire

        // affiche message si fin de partie
        try {
            viewGame.isEndGame();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    /**
     * Gestion des ??v??nements
     */
    private void resolutionEvenements() {
        Continent continentEvent = model.getContinents()[model.currentEvent];
        if (model.getCo2() >= 350){
            // une catastrophe a lieu
            viewGame.displayAlertWithoutHeaderText("??v??nements", "Le CO2 d??passe les 350ppm une catastrophe va se produire en "+ continentEvent + " !");
            // si multi v??rifier tous les joueurs
            Player curPlayer = model.getCurrentPLayer();
            if (!continentEvent.hasGreenCentral()) {
                // le joueur n'as pas de centrale ?? ??nergie verte
                if (curPlayer.getResourcesTech() >= 1){
                    // si il a des ressources technologiques il paye avec celle-ci
                    viewGame.displayAlertWithoutHeaderText("??v??nements", "Malheureusement vous n'avez pas de centrale ?? ??nergie verte en "+ continentEvent +" !\nVous devez c??der une ressource techonologique ?? ce continent.");
                    curPlayer.setResourcesTech(curPlayer.getResourcesTech()-1);
                    continentEvent.setNbRessTech(continentEvent.getNbRessTech()+1);
                    viewGame.reloadCEPRessTech();
                } else {
                    // si il n'as pas de ressources technologiques il perd 2 pts de victoire
                    viewGame.displayAlertWithoutHeaderText("??v??nements", "Malheureusement vous n'avez pas de centrale ?? ??nergie verte en "+ continentEvent +" !\nVous perdez 2 points de victoire car vous n'avez plus de\nressources techonologiques.");
                    curPlayer.setPointVictoire(curPlayer.getPointVictoire()-2);
                    viewGame.reloadPointVictoire();
                }
            } else {
                viewGame.displayAlertWithoutHeaderText("??v??nements", "F??licitation vous avez une centrale en "+ continentEvent +" !\nVous ne payer rien pour cette catastrophe !");
            }
        } else {
            //rien n???arrive ?? la r??gion, mais l?????v??nement est quand m??me consid??r?? comme r??solu
            viewGame.displayAlertWithoutHeaderText("??v??nements", "Bravo ! une catastrophe a ??t?? ??vit??e\nen " + continentEvent + " !");
        }
        model.pullEvent(new Random());
        viewGame.updateEvent();
    }

    /**
     * permet de savoir si tout les contients on le bon nombre de central
     * @param nbCentral
     * @return la liste des continents dans le besoin
     */
    public ArrayList<Continent> verifierNbCentral(int nbCentral){
        Continent[] continents = model.getContinents();
        ArrayList<Continent> continentsEnBesoin = new ArrayList<>();
        for(int i = 0; i < continents.length; i++){
            //R??cup??ration des case central du continent
            ArrayList<Central> caseCentrals = continents[i].getCentrales();
            //Variables pour stocker le nombre de central dans le continent
            int nbCentralInContinent = 0;
            //On regarde le nombre de case qui sont occup??e ou non
            for (Central c: caseCentrals){
                //Si la case central est occup??e, on ajout 1 au nombre de central dans le continent
                if(c.isOccupe()) nbCentralInContinent += 1;
            }
            //On regarde si le nombre de central dans le continent est suffisant ou non
            if(nbCentralInContinent < nbCentral && nbCentralInContinent < continents[i].getCentrales().size()){
                String title = "ATTENTION ! L'"+continents[i].getName()+" a besoin de central";
                String message = "Il manque "+(nbCentral-nbCentralInContinent)+" centrale en "+continents[i].getName();
                viewGame.displayAlertWithoutHeaderText(title, message);
                continentsEnBesoin.add(continents[i]);
            }
            else{
                String title = "Tout va bien !";
                String message = "Il ne manque aucunes centrales en "+continents[i].getName();
                viewGame.displayAlertWithoutHeaderText(title, message);
            }
        }
        return continentsEnBesoin;
    }

    /**
     * Permet d'effectuer les actions pour les contients n'ayant pas assez de central c'est-??-dire:
     * 1. Prenez la centrale ?? combustible fossile du haut de la pile et posez-la sur la case ??nergie libre la plus ?? gauche de la r??gion.
     * 2. Augmentez le niveau global de pollution de CO2 du nombre indiqu?? par la centrale ?? combustible fossile. (Char-bon = 40 ppm, P??trole = 30 ppm, Gaz = 20 ppm).
     * 3. Si un joueur contr??le la r??gion, il doit payer 1 CEP ?? labanque de sa r??serve ou d???une r??gion qu???il contr??le (pas n??cessairement de la r??gion concern??e !).
     *    S???il ne poss??de pas de CEP (ni dans sa r??serve, ni dans une des r??gions qu???il contr??le):
     *    il doit en acheter un au march??.
     *    S???il n???a pas assez d???argent pour acheter un CEP au march?? au cours de cette phase d???approvisionnement (et seulement au cours de cette phase):
     *    il doit ??changer des points de victoire (PV) pour 1 pi??ce chacun, jusqu????? (et seulement jusqu?????) ce qu???il ait assez d???argent pour payer le CEP ;
     *    il recule alors son disque d???une case sur la piste de PV pour chaque pi??ce per??ue. Les points n??gatifs sont autoris??s.
     * Si personne ne contr??le la r??gion, le CEP est pris dans la pile de la r??gion.
     *
     * @param continentsEnBesoin
     */
    public void manqueCentral(ArrayList<Continent> continentsEnBesoin){
        //pour chaque continent dans le besoin
        Random random = new Random();
        centralTypes[] typesCentralsFossile = {centralTypes.CHARBON, centralTypes.PETROLE, centralTypes.GAZNATUREL};
        for(Continent c: continentsEnBesoin){
            //Phase 1.
            //on cherche la premi??re case de libre dans les centrales du continent
            for(Central caseCentral: c.getCentrales()){
                if(!caseCentral.isOccupe()){
                    //Une fois trouv??e, on ajoute une central ?? cette case
                    int type = random.nextInt(3) ;
                    viewGame.addCentrale(typesCentralsFossile[type], c, caseCentral.getIndex());
                    //on met ?? jour le mod??le
                    model.putFossileCentral(c, typesCentralsFossile[type],caseCentral.getIndex());
                    //et on sort de la boucle
                    break;
                }
            }
            //Phase 2.
            //On regarde si le joueur controle le continent (?? changer pour g??n??raliser ?? tout les joueurs si jeu en multi)
            List<Continent> continentsControlleParJoueur = model.getCurrentPLayer().getContinentsControlles();
            for (Continent continentController:continentsControlleParJoueur){
                if(continentController.equals(c)){
                    //affichage d'un message
                    viewGame.displayAlertWithoutHeaderText("Danger !", "Vous controllez un continent en manque d'??nergie ! "+c.getName()+" Vous devez payer !!");
                    if (model.curPlayer.getCEP() >= 1) {
                        // on retire CEP
                        viewGame.displayAlertWithoutHeaderText("Paiement", "Pour r??gler le paiement, vous payez un CEP de votre r??serve");
                        model.removeCEP();
                        viewGame.reloadCEPRessTech();
                        System.out.println("Paiement ?? la banque d'un CEP de ma r??serve");
                    } else if (continentController.getNbCep() >= 1 ) {
                        //si il y a des cep dans continent controler on prend
                        viewGame.displayAlertWithoutHeaderText("PaiementCEPContinentControle", "Pour r??gler le paiement, comme vous n'avez plus de CEP dans votre r??serve, \n" +
                                " vous payez un CEP du continent "+ continentController.getName() +" que vous controlez");
                        continentController.setNbCep(continentController.getNbCep()-1);
                        viewGame.reloadCEPRessTech();
                        System.out.println("Paiement ?? la banque d'un CEP du continent " + continentController.getName());
                    } else {
                        if ((continentController.getNbCep()< 1 && model.curPlayer.getCEP()<1) && model.currentPriceCEP <= model.getCurrentPLayer().getArgent()){
                            viewGame.displayAlertWithoutHeaderText("PaiementCEPMarche", "Pour r??gler le paiement, comme vous n'avez plus de CEP ni votre r??serve, \n" +
                                    "ni dans votre(vos) continent(s) control??, vous achet?? un CEP au march?? que vous payez ?? la banque");
                            model.tradeDollarstoCEP();
                            viewGame.reloadCEPRessTech();
                            System.out.println("Paiement ?? la banque d'un CEP du march??");
                        }
                        // Si on a pas de cep dans les contient controler et dans nos poche alors
                        else if (model.currentPriceCEP > model.curPlayer.getArgent()) {
                            // La vrai condition = model.currentPriceCEP > model.curPlayer.getArgent()
                            // on echange nos pv contre de l'agrgent puis on achete un cep
                            viewGame.displayAlertWithoutHeaderText("Echange", "Vous n'avez pas assez de CEP\n" +
                                    "Le jeux va ??changer vos point de victoire pour acheter un CEP");
                            model.tradePVtoCEP();
                            System.out.println("trade fait");
                        }
                    }
                }
            }
        }
    }

        // TODO : provoque erreur terminal si la carte 1 n'existe plus (faire gaffe) quand clique fin du tour
}
