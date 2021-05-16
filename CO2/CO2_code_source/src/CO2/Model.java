package CO2;

import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.paint.Color;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileReader;
import java.io.IOException;
import java.util.*;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

import static CO2.greenEnergyTypes.*;

public class Model {

	final static int STATE_INIT = 1; // Title
	final static int STATE_PLAY = 2; // Game
	final int NB_TOUR_PAR_DECENNIE = 7; // 6 pour jeu solo + 1 pour pouvoir changer décénnie
	final int NB_DECENNIE = 2010; // 2010 pour jeu solo, 2020 pour jeu multi à 5 joueurs

	// tour courant
	private int tour;
	// nombre de decenies
	private int nbDecade;
	// decenie courante
	private int decade;

	//prix courant des CEPs
	int currentPriceCEP;
	//nombre de CEP disponible au marché
	int nbCEPdispo;
	// Valeur du CO2 actuelle
	private int co2;

	// paquet des projets
	Map<String,Integer> projectsPacket;

	// evenements
	Map<Integer,Image> events;
	int currentEvent;

	// Liste des sommets
	List<SommetTile> allSommetTile;
	ArrayList<SommetTile> lstAllSommet;

	// Liste des pistes d'expertises
	private List<PisteExpertise> pistesExpertise;

	// Liste des cartes Lobby
	List<LobbyCard> lobbyCards;

	// Liste des différent objectifs de compagnie
	List<ObjectifsCompagnie> objectifsCompagnies;

	List<OnuCard> onuCards;
	List<OnuCard> onuCardsInGame;
	OnuCard markedCard;

	// nombre de joueurs
	private int nbJoueur;
	// tableau contenant les joueurs
	private final Player[] players;
	// joueur courant
	int curPlayerId;
	Player curPlayer;
	//energie choisis par le joueur courant
	private greenEnergyTypes curEnergyChoice;

	private Continent[] continents;

	int state;
	int width;
	int height;

	public Model() {
		state = STATE_INIT;
		width = 1280;
		height = 720;
		nbJoueur = 1;
		tour = 1;
		nbDecade = 1;
		decade = 1970;
		players = new Player[nbJoueur];
		projectsPacket = new HashMap<String, Integer>();
		events = new HashMap<Integer, Image>();
		curPlayerId = 0;
		//On initialise le prix des CEPs à 3
		currentPriceCEP = 3;
		//On place 2 CEP dans le marché
		nbCEPdispo = 2;
		curEnergyChoice = BIOMASS;
		pullEvent(new Random());
	}

	/**
	 * Initialisation des attributs
	 */
	public void init() throws IOException {
		// Initialisation du tableau contenant les 6 tuiles de projet solaire

		projectsPacket.put(BIOMASS.name(), 6);
		projectsPacket.put(FUSION.name(), 6);
		projectsPacket.put(RECYCLING.name(), 6);
		projectsPacket.put(REFORESTATION.name(), 6);
		projectsPacket.put(SOLAR.name(), 6);

		// Initialisation des joueurs
		initPlayers();
		// Initialisation des tours
		initTour();
		// Initialisation des décénnies
		initDecade();
		// Initialisation des continents
		initContinents(new Random());
		// Initialisation des sommets
		initSommetTile();
		// Initialisation les barres d'expertise
		initExpertise();
		// Initialisation les cartes Lobby
		initLobbyCards();
		// Initialisation les cartes Objectifs de l'ONU
		initOnuCards(new Random(), new Random(), new Random());
		// Initialisation des objectifs de compagnie
		// A ne pas placer avant l'initialisation des joueurs
		initObjectifCompagnie();
	}

	/**
	 * Permet de créer les 3 objectifs de compagnie possibles
	 */
	public void initObjectifCompagnie(){
		objectifsCompagnies = new ArrayList<>();
		//Initialisation des objectifs de compagnie
		objectifsCompagnies.add(new ObjectifsCompagnie(0, "3 points pour chaque région où \nvous avez au moins 1 centrale\nMaximum de 15 points."));
		objectifsCompagnies.add(new ObjectifsCompagnie(1,"3 points pour chaque carte \n“objectif de l’ONU” que vous avez remportée\nMaximum de 15 points. "));
		objectifsCompagnies.add(new ObjectifsCompagnie(2, "2 points pour chaque CEP en main\nMaximum de 16 points."));
		//Tirage aléatoire d'un objectif parmis les 3
		//1 objectif différent par joueur
		for(int i = 0; i<nbJoueur; i++){
			Random random = new Random();
			int idx = random.nextInt(objectifsCompagnies.size());
			players[i].setObjectifCompagnie(objectifsCompagnies.get(idx));
			objectifsCompagnies.remove(idx);
		}
	}

	/**
	 * Initialise les cartes objectif de l'ONU
	 * @param rand2typesCentral random de point de victoire pour 2 types de centrales
	 * @param rand3typesCentral random de point de victoire pour 3 types de centrales
	 * @param rand4typesCentral random de point de victoire pour 4 types de centrales
	 */
	public void initOnuCards(Random rand2typesCentral, Random rand3typesCentral, Random rand4typesCentral) {
		onuCards = new ArrayList<>();
		int id = 34;
		for(int i=0; i<13;i++){ // 12 cartes (comme le jeu)
			OnuCard onu = null;
			boolean exist = false;
			do{
				onu = new OnuCard(id, 0); // création de la carte onu
				for (OnuCard o : onuCards){ // boucle sur les OnuCards
					// compare la taille de la carte qui vient d'être créer avec la taille des cartes du jeu
					if(o.getTypesCentral().size() == onu.getTypesCentral().size()){
						// récupère les 2 listes
						ArrayList centralTypeListOther = new ArrayList<>(o.getTypesCentral());
						ArrayList centralTypeListCurrent = new ArrayList(onu.getTypesCentral());
						centralTypeListCurrent.removeAll(centralTypeListOther); // enlève une liste dans une autre
						if(centralTypeListCurrent.isEmpty()){ // vérifie si c'est vide
							exist = true; // il existe déjà une carte avec ces types
							break; // sortir du for
						}else{
							exist = false; // nouvelle carte
						}
					}
				}
			}while (exist);
			// ajout du nombre de points de victoires en fonction du nombre de type centrales sur la carte
			switch (onu.getTypesCentral().size()){
				case 2: // 2 type d'énergie
					onu.setNbPointDeVictoire(4 - rand2typesCentral.nextInt(2)); // 3 ou 4
					break;
				case 3: // 3 type d'énergie
					onu.setNbPointDeVictoire(6 - rand3typesCentral.nextInt(2)); // 5 ou 6
					break;
				case 4: // 3 type d'énergie
					onu.setNbPointDeVictoire(8 - rand4typesCentral.nextInt(2)); // 7 ou 8
			}
			onuCards.add(onu);
			id++;// id de 34 à 46
		}
	}

	/**
	 * Selection de 10 cartes parmis toutes les cartes au début du jeu
	 * les autres ne seront pas utilisé pour le jeu
	 * @return List<OnuCard> retourne la liste des cartes sélectionnées
	 */
	public List<OnuCard> initOnuCardsInGame(){
		onuCardsInGame = new ArrayList<>(); // liste de carte qui seront selectionnée ppour la partie
		OnuCard card;
		for (int i = 0;i<10;i++) { // 10 cartes choisi (7 pour 2 joueurs)
			// selection d'une carte aléatoirement parmis la liste totale des cartes de l'ONU
			do card = onuCards.get(new Random().nextInt(onuCards.size()));
			while(onuCardsInGame.contains(card));
			onuCardsInGame.add(card);
		}
		System.out.println("les 10 cartes 'objectifs de l'ONU' selectionnées sont :");
		return onuCardsInGame;
	}


	/**
	 * Initialise les cartes Lobby
	 * et en donne 5 au joueur
	 */
	private void initLobbyCards() {
		lobbyCards = new ArrayList<>();

		// cartes proposer un projet sur un continent
		for (Continent c : continents)
			lobbyCards.add(new LobbyCard<>(lobbyActionTypes.PROPOSER, c, lobbyMineurTypes.RESOURCES));

		// cartes proposer un projet sur une subvention
		for (subventionTypes sub : subventionTypes.values())
			lobbyCards.add(new LobbyCard<>(lobbyActionTypes.PROPOSER, sub, lobbyMineurTypes.CEP));

		// cartes mettre en place un type de projet
		// cartes construire une centrale
		// cartes sommet d'un type d'energie
		for (greenEnergyTypes type : greenEnergyTypes.values()) {
			lobbyCards.add(new LobbyCard<>(lobbyActionTypes.METTRE, type, lobbyMineurTypes.SCIENTIFIQUE));
			lobbyCards.add(new LobbyCard<>(lobbyActionTypes.CONSTRUIRE, type, lobbyMineurTypes.ARGENT));
			lobbyCards.add(new LobbyCard<>(lobbyActionTypes.SOMMET, type, lobbyMineurTypes.ARGENT));
		}

		// donner 5 cartes parmi ces cartes au joueur
		getCurrentPLayer().giveLobbyCards(lobbyCards, 5, new Random());
	}

	/**
	 * Initialise les barres d'expertise
	 */
	private void initExpertise() {
		pistesExpertise = new ArrayList<>();
		pistesExpertise.add(new PisteExpertise(SOLAR, 6, Color.GOLD));
		pistesExpertise.add(new PisteExpertise(BIOMASS, 7, Color.BURLYWOOD));
		pistesExpertise.add(new PisteExpertise(RECYCLING, 7, Color.DEEPSKYBLUE));
		pistesExpertise.add(new PisteExpertise(FUSION, 6, Color.DARKSLATEGRAY));
		pistesExpertise.add(new PisteExpertise(REFORESTATION, 5, Color.SEAGREEN));
	}

	/**
	 * Initialise les joueurs
	 */
	private void initPlayers() {
		for (int i = 0; i < nbJoueur; i++) {
			players[i] = new Player();
		}
		curPlayer = getCurrentPLayer();
	}
	/**
	 * Initialise le nombre de tour
	 */
	public void initTour(){
		if (nbJoueur == 2) setTour(5);
		if (nbJoueur == 3) setTour(4);
		if (nbJoueur == 4) setTour(3);
		if (nbJoueur == 5) setTour(2);
	}
	/**
	 * Initialise le nombre de décennie
	 */
	public void initDecade(){
		if (nbDecade == 2) setDecade(1980);
		if (nbDecade == 3) setDecade(1990);
		if (nbDecade == 4) setDecade(2000);
	}

	/**
	 * Initialise les continents
	 * @param random
	 */
	private void initContinents(Random random){
		continents = new Continent[6];
		ArrayList<String> nomContinents = new ArrayList<>(Arrays.asList("Europe", "Afrique", "Amérique du Sud", "Amérique du Nord", "Océanie", "Asie"));
		int nbCep = 0;
		for(int i=0; i<6 ;i++){
			// Initialisation du nombre de CEP en fonction du continent
			if(nomContinents.get(i).equals("Europe")) nbCep = 5;if(nomContinents.get(i).equals("Afrique")) nbCep = 3;
			if(nomContinents.get(i).equals("Amérique du Sud")) nbCep = 4;if(nomContinents.get(i).equals("Amérique du Nord")) nbCep = 5;
			if(nomContinents.get(i).equals("Océanie")) nbCep = 4;if(nomContinents.get(i).equals("Asie")) nbCep = 6;
			continents[i] = new Continent(nomContinents.get(i), nbCep, new Image(getClass().getResourceAsStream("images/Continents/" + nomContinents.get(i) +".jpg")),i);

			// Choix des energies de la carte agenda du continent
			ArrayList<greenEnergyTypes> energyTypesListe = new ArrayList<>();
			energyTypesListe.addAll(Arrays.asList(greenEnergyTypes.values()));
			greenEnergyTypes agendaEnergies[] = new greenEnergyTypes[3];
			for (int j = 0; j<agendaEnergies.length; j++)
				agendaEnergies[j] = energyTypesListe.remove(random.nextInt(energyTypesListe.size()));
			// creation de la carte agenda
			AgendaTile agendaTile = new AgendaTile(agendaEnergies[0], agendaEnergies[1], agendaEnergies[2], new Image(getClass().getResourceAsStream("images/Agendas/AgendaTile_"+agendaEnergies[0]+"_"+agendaEnergies[1]+"_"+agendaEnergies[2]+".png")));
			continents[i].setAgendaTile(agendaTile);

			//Init carte évènements
			events.put(i,new Image(getClass().getResourceAsStream("images/Evenements/" + nomContinents.get(i) +".png")));
		}
	}


	/**
	 * Initialise les sommets
	 */
	public void initSommetTile() throws IOException {
		lstAllSommet = new ArrayList<SommetTile>();
		ArrayList<Subject> subjects= new ArrayList<Subject>();

		File fichier = new File("src/CO2/sommetTile.txt");
		BufferedReader bufferedReader = new BufferedReader(new FileReader(fichier));
		String st;

		int continentNb = 0;
		while((st = bufferedReader.readLine()) != null) {

			String location = st.split(" ")[0];
			String subject1 = st.split(" ")[1];
			String subject2 = st.split(" ")[2];
			String subject3 = st.split(" ")[3];
			String subject4 = st.split(" ")[4];

			subjects.add(stringToSubject(subject1));
			subjects.add(stringToSubject(subject2));
			if (!subject3.equals("none")) subjects.add(stringToSubject(subject3));
			if (!subject4.equals("none")) subjects.add(stringToSubject(subject4));

			lstAllSommet.add(new SommetTile(location, null, subjects.size(), subjects, new ImageView(new Image(getClass().getResourceAsStream("images/Sommets/" + location + ".png")))));
			subjects.clear();
			if (continentNb < 5) {
				continentNb++;
			} else {
				continentNb = 0;
			}
		}
		bufferedReader.close();
		SommetTile sommetTile;
		allSommetTile = new ArrayList<>();
		for (int i = 0; i < 6; i++) {
			sommetTile = lstAllSommet.remove(new Random().nextInt(lstAllSommet.size()));
			allSommetTile.add(sommetTile);
			sommetTile.setContinent(continents[i]);
			continents[i].setSommetTile(sommetTile);
		}
	}

	public Subject stringToSubject(String subject){
		Subject subjectEnergy = new Subject();
		if (subject.equals("Solar")) subjectEnergy.setEnergy(SOLAR);
		if (subject.equals("Fusion")) subjectEnergy.setEnergy(FUSION);
		if (subject.equals("Reforestation")) subjectEnergy.setEnergy(REFORESTATION);
		if (subject.equals("Biomass")) subjectEnergy.setEnergy(BIOMASS);
		if (subject.equals("Recycling")) subjectEnergy.setEnergy(RECYCLING);
		return subjectEnergy;
	}

	public void pullEvent(Random random){
		int indexEvent = random.nextInt(6);
		while (indexEvent == currentEvent) indexEvent = random.nextInt(6);
		currentEvent = indexEvent;
	}

	/**
	 * Ajoute 1 d'expertise au joueur courant pour un type d'energie verte
	 * @param energyType type d'energie concernee
	 */
	public void incrementExpertise(greenEnergyTypes energyType) {
		curPlayer = players[curPlayerId];
		curPlayer.addExpertise(energyType, 1);
	}

	/**
	 * Donne le bonus d'expertise
	 * @param p joueur concerne
	 * @param bonus bonus a donner
	 * @param choix choix eventuel (continent ou type d'expertise pour les bonus a choix)
	 */
	public void giveExpertiseBonus(Player p, BonusExpertise bonus, Object choix) {
		if (bonus.equals(BonusExpertise.CEP)) ((Continent) choix).addCEP(1);
		if (bonus.equals(BonusExpertise.EXPERTISE)) p.addExpertise((greenEnergyTypes) choix, 1);
		if (bonus.equals(BonusExpertise.BIOMASS)) p.addExpertise(BIOMASS, 1);
		if (bonus.equals(BonusExpertise.FUSION)) p.addExpertise(FUSION, 1);
		if (bonus.equals(BonusExpertise.REFORESTATION)) p.addExpertise(REFORESTATION, 1);
		if (bonus.equals(BonusExpertise.SOLAR)) p.addExpertise(SOLAR, 1);
		if (bonus.equals(BonusExpertise.RECYCLING)) p.addExpertise(RECYCLING, 1);
		if (bonus.equals(BonusExpertise.RESOURCE)) p.addResourcesTech(1);
	}

	/**
	 * permet de vérifier si la tuile est plaçable ou non
	 * @return boolean
	 */
	public boolean verrifAddProjectTileToSubvention(Continent continent, Subvention subvention, greenEnergyTypes energy){
		// si l'energie ne peux pas etre placee sur le continent -> action impossible
		if(!continent.getAgendaTile().isPossiblePlacement(energy)) return false;

		if(subvention.getProject() == null || subvention.getProject().isSubventionPossible()) return true;

		return false;
	}

	/**
	 * permet d'ajouter la tuile sur la case subvention(recherche en collaboration) une fois vérifié
	 */
	public void addProjectTileToSubvention(Continent continent, Subvention subvention, greenEnergyTypes energyChoisi){
		setCurEnergyChoice(energyChoisi); //récup l'énergie du projet
		subvention.setEnergyTypes(energyChoisi);

		//création du nouveau projet ( et l'asigne à la subvention)
		Project newProject = new Project(energyChoisi);
		subvention.setProject(newProject);
		subvention.getProject().setSubventionPossible(false);
		continent.getSubventions().get(subvention.getIndex()).addTilesProject(newProject);

		//maj du paquet du projet
		projectsPacket.put(getCurEnergyChoice().name(),projectsPacket.get(getCurEnergyChoice().name())-1);

		System.out.println("Energie choisis = " + getCurEnergyChoice());
	}

	/**
	 * permet de savoir si le joueur peut déplacer un scientifique, et met à jour la "localisation" du scientifique
	 * @return true si il peut, sinon false
	 */
	public boolean moveScientificOnProject(Continent continent, Subvention subvention){
		Scientifique sc= this.getCurrentPLayer().getCurrentScientifique();
		// si la subvention n'est pas occupé
		if(!subvention.isStaffed()){
			sc.setContinent(continent);
			sc.setSubvention(subvention);
			return true;
		}
		return false;
	}

	/**
	 * permet de savoir si le joueur peut déplacer un scientifique d'un projet à un sommet
	 * @return true si il peut, sinon false
	 */
	public boolean moveScientificOnSommet(Subvention subvention, SommetTile sommetTile){
		Scientifique scientifique = this.getCurrentPLayer().getCurrentScientifique();
		if (scientifique.getContinent() == null){
			return false;
		} else {
			// À faire pour toutes les énergies
			// vérifie si le sommet ainsi que la subvention on tous deux l'énergie solaire.
			return sommetTile.haveEnergyAndUnoccupied(subvention.getEnergyTypes()) && subvention.getProject() != null;
		}
	}

	/**
	 * Permet de savoir si un joueur peut mettre en place un projet ET LE MET EN PLACE
	 * @return
	 */
	public boolean mettreEnPlaceProjetByPlayer(greenEnergyTypes greenEnergyTypes, Subvention subvention){
		curPlayer = getCurrentPLayer();
		if(curPlayer.getCEP() >= 1){
			int nbCep = curPlayer.rewardSetupProject(greenEnergyTypes);
			curPlayer.addCEP(nbCep);
			curPlayer.removeCEP();
			subvention.getProject().setMisEnPlace(true);
			return true;
		}
		return false;
	}

	public boolean mettreEnPlaceProjetByContinent(greenEnergyTypes greenEnergyTypes, Subvention subvention, Continent ProjectBuyContinent){
		curPlayer = getCurrentPLayer();
		if(ProjectBuyContinent.getNbCep() >= 1){
			int nbCep = curPlayer.rewardSetupProject(greenEnergyTypes);
			achatCEP(nbCep);
			curPlayer.addCEP(nbCep);
			ProjectBuyContinent.removeCEP();
			subvention.getProject().setMisEnPlace(true);
			return true;
		}
		return false;
	}

	/**
	 * vérifier le nombre de tour pour augmenter ou non la décénnie
	 */
	public void TourSuivant() {
		// vérifie si le nombre de tour par décénnie est atteinte
		if (tour != NB_TOUR_PAR_DECENNIE-1) {
			// incrémentation de la décénnie
			tour++;
		} else {
			// réinitialise le tour à 1
			tour = 1;
			// passe à la décennie suivante
			decade+=10;
		}
	}

	/**
	 * vérifie le nombre de décénnie
	 * @return true si le nombre de décénnie max est atteinte, sinon, false
	 */
	public boolean endGame() {
		// si le nombre de décénnie a atteint son maximum
		if (decade == NB_DECENNIE || co2 >= 500) {
			// alors c'est la fin du jeu
			System.out.println("FIN DU JEU");
			// return true
			Model model = new Model();
			return true;
		}
		else if(decade == NB_DECENNIE-10 && co2 <= 350){
			// alors c'est la fin du jeu
			System.out.println("FIN DU JEU");
			// return true
			Model model = new Model();
			return true;
		}
		else if(checkCentralVerte()){
			// alors c'est la fin du jeu
			System.out.println("FIN DU JEU");
			// return true
			Model model = new Model();
			return true;
		}
		return false;
	}

	public boolean checkCentralVerte(){
		int nbContinentFullCentralVerte = 0;
		for (int i =0; i<continents.length; i++){ //Pour chaque continent...
			int nbCentralVerte = 0;
			for(Central c: continents[i].getCentrales()){
				if(!c.isOccupe()) break;
				else if(c.isFossile()) {
					break;
				}
				else if(!c.isFossile()){
					nbCentralVerte += 1;
				}
			}
			if(nbCentralVerte == continents[i].getCentrales().size()){
				nbContinentFullCentralVerte += 1;
			}
		}
		if(nbContinentFullCentralVerte == 2){
			return true;
		}
		return false;
	}

	public void achatCEP(int nbAchat){
		this.nbCEPdispo -= nbAchat;
		if(nbCEPdispo == 0){
			nbCEPdispo += 2;
			if(currentPriceCEP < 8) currentPriceCEP += 1;
		}
	}

	public void venteCEP(){
		this.nbCEPdispo += 1;
		if(currentPriceCEP > 1) currentPriceCEP -= 1;
	}

	/**
	 * donne le sommet
	 * @return sommet complet
	 */
	public SommetTile getCurrentSommetFull(){
		// boucle sur tous les sommets du jeu
		for(SommetTile sommet: allSommetTile) {
			if (sommet.isFull()) { // si le sommet est rempli de scientifique
				return sommet;
			}
		}
		return null;
	}


	/**
	 * retourne l'index du continent d'un sommet donner en paramètre
	 * @param sommet d'un continent
	 */
	public int getIndexContinentSommet(SommetTile sommet){
		// boucle sur tous les sommets du jeu
		for(int i = 0;i<continents.length;i++) {
			if (sommet.getContinent() == continents[i]) {
				return i;
			}
		}
		return -1;
	}


	/**
	 * donne les récompenses de tous les scientifiques et redonne les sceintifiques aux joueurs
	 * @return la liste des scientifiques sur le sommet fini
	 */
	public ArrayList<Scientifique> giveRewardsSommet(SommetTile sommet) {
		if(sommet == null) return null;
		ArrayList<Scientifique> scientifiques =  sommet.getScientifiques(); // récupère les scientifiques d'un sommet
		for(Player p: players){
			for(Scientifique sPlayer: p.getScientifiques()){ // récupère tous les scientifiques d'un joueur
				if(scientifiques.contains(sPlayer)){ // si le sommet contient le scientifique d'un joueur
					// on donne le bonus du joueur en fonction du sujet étudié par le scientifique
					giveRewardsSommetToPlayer(sPlayer.getSubject().getEnergy(), p);
					sPlayer.setSubject(null); // le scientifique n'a plus de sujet
					sPlayer.setSommetTile(null); // le scientifique n'est plus sur le sommet
					// si multi : redonner chaque scientifique à chaque joueur
					p.setScientifiques(sommet.getScientifiques()); // redonne les scientifiques sur le sommet au joueur
					// création d'un nouveau sommet
					allSommetTile.remove(sommet); // suppression du sommet dans la liste des sommets
					lstAllSommet.add(sommet); // remettre le sommet fini dans la liste de tous les sommets hors jeu
					SommetTile sommetTile;
					Continent continent = sommet.getContinent();
					sommetTile = lstAllSommet.remove(new Random().nextInt(lstAllSommet.size())); // récupération d'un sommet aléatoire dans la liste des sommets hors jeu
					allSommetTile.add(sommetTile); // ajout du sommet au jeu
					sommetTile.setContinent(continent); // ajout du continent au sommet
					continent.setSommetTile(sommetTile); // ajout du sommet au continent
				}
			}
			return sommet.getScientifiques();
		}
		return null;
	}

	/**
	 * @param energy Energy verte ou était le scientifique
	 * @param p Le joueur a donnné les bonus
	 */
	public void giveRewardsSommetToPlayer(greenEnergyTypes energy, Player p) {
		switch (energy){
			case SOLAR:
				p.addExpertise(SOLAR, 1);
				break;
			case FUSION:
				p.addExpertise(FUSION, 1);
					break;
			case BIOMASS:
				p.addExpertise(BIOMASS, 1);
					break;
			case RECYCLING:
				p.addExpertise(RECYCLING, 1);
					break;
			case REFORESTATION:
				p.addExpertise(REFORESTATION, 1);
					break;
		}
	}

	/**
	 * @param projetMisEnPlaceChoisi La case de subvention ou le projet choisis se situe
	 * @return - <0 Si la centrale n'est pas créable
	 * 		   - l'index ou la centrale a été posé si cela est possible
	 */
	public int putCentral(Subvention projetMisEnPlaceChoisi) {
		// TODO : Suis qui enleve le projet ne pas oublier de le faire aussi dans le modele
		if (!getCurrentPLayer().canConstruct(projetMisEnPlaceChoisi.getProject())) return -3;
		// Si pas des scientifique sur projetMisEnplaceChoisi
		if(projetMisEnPlaceChoisi.isStaffed()) return -2;
		ArrayList<Central> centrales = projetMisEnPlaceChoisi.getContinent().getCentrales();
		for (int i = 0; i < centrales.size(); i++) {
			// Si un espace est libre ou qu'il n'est pas libre et que c'est une centrale fossile
			if (!centrales.get(i).isOccupe() || (centrales.get(i).isOccupe() && centrales.get(i).isFossile() && projetMisEnPlaceChoisi.getContinent().allPlantsAreOccupied())) {
				// Alors on l'occupe
				getCurrentPLayer().setActionPrincipaleDone(true);
				centrales.get(i).setOccupe(true);
				// Affecation type
				centrales.get(i).setType(projetMisEnPlaceChoisi.getProject().getCentralType());
				// Si le joueur a un continent controlé on réduit le cout de 1 en prenant le cube du continent
				int[] cout = {
						projetMisEnPlaceChoisi.getProject().getCentralType().getCout()[0],
						projetMisEnPlaceChoisi.getProject().getCentralType().getCout()[1]
				};
				int index = curPlayer.getContinentsControlles().indexOf(projetMisEnPlaceChoisi.getContinent());
				if (index >= 0 ) {
					if(	curPlayer.getContinentsControlles().get(index).getNbRessTech() > 0){
						curPlayer.getContinentsControlles().get(index).removeRessTech();
						cout[1]--;
					}
				}
				// le joueur paye la centrale
				getCurrentPLayer().payCentral(cout);
				// comme seul joueur, il prend le controlle du continent quand il met en place
				giveControl(projetMisEnPlaceChoisi.getContinent());

				if (centrales.get(i).isOccupe() && centrales.get(i).isFossile() && projetMisEnPlaceChoisi.getContinent().allPlantsAreOccupied()) {
					// récompenses du remplacement
					// le joueur prends 1 CEP du marché et le place sur la la région si la limite régionale de CEP est respecté
					projetMisEnPlaceChoisi.getContinent().addCEP(1);
					//réduisez le niveau de CO2 globale en enlevant celui de la centrale fossile
					this.co2 -= centrales.get(i).getType().getCo2();
				}
				projetMisEnPlaceChoisi.setEnergyTypes(null);
				return centrales.get(i).getIndex();
			}
		}
		return -1 ;
	}

	/**
	 * Donne le controlle d'un continent au joueur courrant
	 * @param continent continent controller
	 */
	public void giveControl(Continent continent) {
		// update dans player
		getCurrentPLayer().takeControl(continent);
		// update dans continent
		continent.setControlPlayer(getCurrentPLayer());
	}

	/**
	 * Extrait les valeurs de la chaine de characteres choisi par le joueur
	 * et les passes a une methode du joueur qui les ajoute a ces proprietes
	 * @param p le joueur concerne
	 * @param repartition la reponse choisie par le joueur
	 */
	public void giveRevenu(Player p, String repartition) {
		int[] nombres = new int[2];
		// extraire les chiffres de la chaine de characteres
		Pattern pattern = Pattern.compile("\\d+");
		Matcher matcher = pattern.matcher(repartition);
		for (int i = 0; i<nombres.length; i++) {
			matcher.find();
			System.out.println(matcher.group());
			nombres[i] = Integer.parseInt(matcher.group());
		}
		// donne les valeurs trouvees au joueur
		p.giveRevenu(nombres);
	}

	/**
	 * Vérifier si une des cartes "objectif de l'ONU" du jeu est marquer par un joueur
	 * @return true si une carte est marquée (si un joueur à contruit tout les types de centrales présents sur une carte)
	 */
	public boolean markOnuCard(OnuCard card, ArrayList<String> centralGreen){
		String CentraleName;
		for(int i=0; i<getContinents().length; i++) { // boucle sur continent
			ArrayList<Central> caseCentrals = continents[i].getCentrales();
			for (Central c : caseCentrals) { // pour toutes les cases de centrales
				if (c.isOccupe() && !c.isFossile()) { // si centrale occupé et pas fossible
					CentraleName = c.getType().name(); // récupération du nom
					centralGreen.add(CentraleName); // ajouter a la liste des centrales vertes construites sur le jeu
					System.out.println("liste des centrales vertes :" + centralGreen);
				}
			}
		}
		if (centralGreen.containsAll(card.getTypesCentral())) { // si la liste des centrales vertes construites contient tous les types de centrales d'une carte ONU
			return true;
		}
		return false;
	}

	/**
	 * Vérifier si le joueur a marquer une carte de l'ONU et si il possède au moins un cube de ressource technologique
	 *	Donne les points de victoires au joueur et diminue ses ressources technologiques de -1
	 */
	public void giveVictoryPointsOnuCards(OnuCard card, ArrayList<String> centralGreen) throws Exception {
		if (markOnuCard(card, centralGreen) && getCurrentPLayer().getResourcesTech() >= 1){ // si une carte est marquée par le joueur et qur la ressource technologique
			getCurrentPLayer().setPointVictoire(getCurrentPLayer().getPointVictoire() + card.getNbPointDeVictoire()); // augmente points de victoires avec la carte
			getCurrentPLayer().setResourcesTech(getCurrentPLayer().getResourcesTech()-1); // diminue ressources technologieques du joueur
			getCurrentPLayer().addCarteObjectifONURemporte(1);
			System.out.println("carte ONU jouer !");
			onuCardsInGame.remove(card); // supprime la carte du jeu
		}else{
			throw new Exception("Pas de carte marquée ou/et pas assez de cubes de ressource technologique!");
		}
	}

	/**
	 * Joue la carte lobby choisie
	 * @param card carte lobby choisie
	 * @param majeur determine si le joueur veut jouer le lobby mineur (false) ou majeur(true)
	 * @return false si la mission n'est pas remplie
	 */
	public boolean playLobbyCard(LobbyCard card, boolean majeur) {
		if (!majeur) {
			getCurrentPLayer().playMinorLobbyCard(card);
			return true;
		}
		boolean canPLay = canPlayLobbyCard(card);
		if (majeur && canPLay) getCurrentPLayer().playLobbyCard(card);
		return canPLay;
	}

	/**
	 * Verifie si le joueur a effectuer la tache de lobby majeur
	 * requise par la carte lobby
	 * @param card
	 * @return
	 */
	private boolean canPlayLobbyCard(LobbyCard card) {
		Player p = getCurrentPLayer();
		Object complement = card.getComplement();

		switch (card.getLobbyActionType()){
			case PROPOSER:
				// 1er type de carte
				// il doit y avoir un projet non mis en place sur le continent
				if (complement instanceof Continent) {
					// le continent de la carte lobby
					Continent continent = (Continent) complement;
					for (Subvention sub : continent.getSubventions()) {
						Project project = sub.getProject();
						if (project != null && !project.isMisEnPlace())
							return true;
					}
				}
				// 2e type de carte
				// il doit y avoir un projet non mis en place sur le type de subvention
				if (complement instanceof subventionTypes) {
					// le type de subvention de la carte lobby
					subventionTypes typeSubvention = (subventionTypes) complement;
					for (Continent continent : continents) {
						for (Subvention subvention : continent.getSubventions()) {
							if (subvention.getType().equals(typeSubvention)) {
								Project project = subvention.getProject();
								if (project != null && !project.isMisEnPlace())
									return true;
							}
						}
					}
				}
				break;
			case METTRE:
				// le type d'energie de la carte lobby
				greenEnergyTypes energyType = (greenEnergyTypes) complement;
				// il doit y avoir un projet mis en place de l'energie mis en place
				for (Continent continent : continents) {
					for (Subvention subvention : continent.getSubventions()) {
						Project project = subvention.getProject();
						if (project != null && project.isMisEnPlace() && project.getEnergyType().equals(energyType))
							return true;
					}
				}
				break;
			case CONSTRUIRE:
				// le type de la centrale de la carte lobby
				energyType = (greenEnergyTypes) complement;
				// la centrale d'energie indiquee doit etre construite
				for (Continent continent : continents) {
					for (Central central : continent.getCentrales()) {
						if (central.energyEquals(energyType))
							return true;
					}
				}
			case SOMMET:
				// le type d'energie de la carte lobby
				energyType = (greenEnergyTypes) complement;
				// il doit y avoir un scientifique sur l'energie d'un sommet
				for (SommetTile sommet : allSommetTile) {
					if (sommet.hasEnergy(energyType)) {
						for (Subject subject : sommet.getSubjects()) {
							if (subject.getEnergy().equals(energyType) && sommet.isStaffed(subject)) {
								return true;
							}
						}
					}
				}
			case MARCHE_ACHAT:
				// actionMarche = 1 // le joueur a fait un achat
				if (p.getActionMarche() == 1) return true;
			case MARCHE_VENTE:
				// actionMarche = 2 // le joueur a fait une vente
				if (p.getActionMarche() == 2) return true;
		}

		return false;
	}

	/**
	 * Retire un CEP de la reserve du joueur s'il en a au moins 1 et s'il contrôle un continent
	 */
	public void removeCEP(){
		getCurrentPLayer().setCEP(getCurrentPLayer().getCEP()-1);
	}

	public List<OnuCard> getOnuCards() { return onuCards; }

	public List<OnuCard> getOnuCardsInGame() {
		return onuCardsInGame;
	}

	public List<PisteExpertise> getExpertises() {
		return pistesExpertise;
	}
	public void setAllSommetTile(List<SommetTile> allSommetTile) {
		this.allSommetTile = allSommetTile;
	}

	public void setExpertises(List<PisteExpertise> pistesExpertise) {
		this.pistesExpertise = pistesExpertise;
	}

	public Player getCurrentPLayer() { return players[curPlayerId]; }

	public Continent[] getContinents() {
		return continents;
	}

	public int getTour() {
		return tour;
	}

	public void setContinents(Continent[] continents) {
		this.continents = continents;
	}

	public void setTour(int tour) {
		this.tour = tour;
	}

	public void setNbJoueur(int nbJoueur) { this.nbJoueur = nbJoueur; }

	public int getNbJoueur() { return players.length; }

	public int getNbDecade() { return nbDecade; }

	public void setNbDecade(int nbDecade) { this.nbDecade = nbDecade; }

	public int getDecade() { return decade; }

	public void setDecade(int decade) { this.decade = decade; }

	public void startGame() { state = STATE_PLAY; }

	/**
	 * Permet de placer uen centrale fossile sur le modele est de mettre a jour son niveau de co2
	 * @param continent Le continent ou placé la centrale
	 * @param type Le type de la centrale
	 *             0 = centrale a charbon
	 *             1 = centrale a petrole
	 *             2 = centrale a gaz
	 */
	public void putFossileCentral(Continent continent, centralTypes type, int index) {
		Central central = continent.getCentrales().get(index) ;
		central.setOccupe(true);
		switch (type){
			case CHARBON :
				central.setType(centralTypes.CHARBON);
				break;
			case PETROLE :
				central.setType(centralTypes.PETROLE);
				break;
			case GAZNATUREL :
				central.setType(centralTypes.GAZNATUREL);
				break;
		}
		this.co2 += central.getType().getCo2();
	}

	public int getCo2() {
		return this.co2 ;
	}

	public List<SommetTile> getAllSommetTile() {
		return allSommetTile;
	}

	public void tradePVtoCEP() {
		while (currentPriceCEP > curPlayer.getArgent()) {
			curPlayer.setPointVictoire(curPlayer.getPointVictoire()-1);
			curPlayer.gainArgent(1);
		}
		curPlayer.retirerArgent(currentPriceCEP);
		curPlayer.addCEP();
		achatCEP(1);
		curPlayer.removeCEP();
	}

	public void tradeDollarstoCEP() {
		curPlayer.retirerArgent(currentPriceCEP);
		achatCEP(1);
	}

	public void setCurEnergyChoice(greenEnergyTypes energyChoisi) {
		this.curEnergyChoice = energyChoisi;
	}

	public greenEnergyTypes getCurEnergyChoice() {
		return curEnergyChoice;
	}

	public int getNbCEPdispo() { return nbCEPdispo; }

	public void setNbCEPdispo(int nbCEPdispo) { this.nbCEPdispo = nbCEPdispo; }

	/**
	 * Recupere tout les CEP des continents controlle et les ajoutent a ceux de l'utilisateur
	 * @return le nombre de CEP total
	 */
	public int getAllCEP(){
		//Pour tout les continent controlle
		for(Continent continentControlle: getCurrentPLayer().getContinentsControlles()){
			//On ajoute au CEP du joueur les CEP du continent controlle
			getCurrentPLayer().addCEP(continentControlle.getNbCep());
		}
		return getCurrentPLayer().getCEP();
	}

	/**
	 * Vent tout les CEP du joueur au prix du marche actuel
	 * @return le nombre total d'argent du joueur
	 */
	public int sellAllCEP(){
		//On ajoute a l'argent du joueur le nombre de CEP qu'il a * le prix courant des CEP
		getCurrentPLayer().gainArgent(getCurrentPLayer().getCEP()*currentPriceCEP);
		//On retire tout les CEP du joueur
		getCurrentPLayer().setCEP(0);
		return getCurrentPLayer().getArgent();
	}

	/**
	 *
	 * @return les points gagnez par l'objectif de compagnie
	 */
	public int getPointsObjectifCompagnie(){
		ObjectifsCompagnie objectif = getCurrentPLayer().getObjectifCompagnie();
		int nbPoint;
		switch (objectif.getId()){
			case 0: //3 points pour chaque région où vous avez au moins 1 centrale Maximum de 15 points.
				//Pour 1 joueur, si le joueur controlle un continent alors il a au moins une central dedans
				int nbContinentAvecCentral = getCurrentPLayer().getContinentsControlles().size();
				nbPoint = 3*nbContinentAvecCentral;
				if(nbPoint >= 15) {
					getCurrentPLayer().addPointVictoire(15);
					return 15;
				}
				getCurrentPLayer().addPointVictoire(nbPoint);
				return nbPoint;
			case 1: // 3 points pour chaque carte "objectif de l’ONU” que vous avez remportée Maximum de 15 points.
				nbPoint = 3*getCurrentPLayer().getNbCarteObjectifONURemporte();
				if(nbPoint >= 15) {
					getCurrentPLayer().addPointVictoire(15);
					return 15;
				}
				getCurrentPLayer().addPointVictoire(nbPoint);
				return nbPoint;
			case 2: // 2 points pour chaque CEP en main Maximum de 16 points.
				nbPoint = 2*getCurrentPLayer().getCEP();
				if(nbPoint >= 16) {
					getCurrentPLayer().addPointVictoire(15);
					return 16;
				}
				getCurrentPLayer().addPointVictoire(nbPoint);
				return nbPoint;
		}
		return 0;
	}

	public int getScoreFinal(){
		//Calcul nb point provenant de l'argent gagné:
		if(getCurrentPLayer().getArgent()%2 != 0) getCurrentPLayer().retirerArgent(1);
		int nbPointArgent = getCurrentPLayer().getArgent()/2;
		getCurrentPLayer().addPointVictoire(nbPointArgent);
		return getCurrentPLayer().getPointVictoire();
	}

	public Image getImgCurEvent(){
		return events.get(currentEvent);
	}

	public void setCurrentPriceCEP(int currentPriceCEP) {
		this.currentPriceCEP = currentPriceCEP;
	}

	public List<PisteExpertise> getPistesExpertise() {
		return pistesExpertise;
	}

	public void setPistesExpertise(List<PisteExpertise> pistesExpertise) {
		this.pistesExpertise = pistesExpertise;
	}
}
