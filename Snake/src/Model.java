import javax.sound.sampled.Clip;
import java.awt.*;
import java.util.ArrayList;
import java.util.List;

class Model {
    private String difficulty;
    private String mode;
    private String theme = "Classic";
    private String lang = "langFR";

    private final int VOL_MIN = 0;
    private final int VOL_MAX = 100;
    private final int VOL_INIT_MUSIC = 40;
    private final int VOL_INIT_BRUITS = 90;
    private int volumeMusique = VOL_INIT_MUSIC;
    private int volumeBruits = VOL_INIT_BRUITS;
    private Clip musicClip;

    private int multiplicateur;
    private Score score;
    private Snake j1;
    private Snake j2;

    private List<Wall> listeWall=new ArrayList<Wall>();
    private List<Objet> listeObjetsLaby=new ArrayList<Objet>();
    private List<Fruit> listeFruit=new ArrayList<Fruit>();
    private java.util.List<Fruit> toAdd=new ArrayList<Fruit>();
    private Chrono chrono;

    private final Color GREEN = new Color(50,99,23);
    private final Color LIGHT_GREEN = new Color(99, 205, 42);
    private final Color BLUE = new Color(47, 81, 103);
    private final Color LIGHT_BLUE = new Color(85,220,238);
    private final Font FONT_50 = new Font("Monospaced", Font.BOLD, 50);
    private final Font FONT_38 = new Font("Monospaced", Font.BOLD, 38);
    private final Font FONT_24 = new Font("Monospaced", Font.BOLD, 24);
    private final Font FONT_18 = new Font("Monospaced", Font.BOLD, 18);

    public Model(){
        score = new Score();
        j1 = new Snake();
        j2 = new Snake();
    }

    /**
     * @return un fruit selon les conditions d'apparitions definies
     */
    public Fruit choisirFruit(){
        String difficulte = this.difficulty;
        String mode = this.mode;
        Fruit fruit = new Fruit();
        int randFruit = (int)(Math.random()*((100)));
        if (difficulte == "easy" && (mode == "traditionnel" || mode == "labyrinthe")){
            if (randFruit<10) {
                fruit = new Fruit("peche",this);
            }
            else if (randFruit>9 && randFruit<20) {
                fruit = new Fruit("pomme",this);
            }
            else if (randFruit>19 && randFruit<30) {
                fruit = new Fruit("banane",this);
            }
            else if (randFruit>29 && randFruit<40) {
                fruit = new Fruit("raisin",this);
            }
            else if (randFruit>39 && randFruit<50) {
                fruit = new Fruit("mure",this);
            }
            else if (randFruit>49 && randFruit<60) {
                fruit = new Fruit("pasteque",this);
            }
            else if (randFruit>59 && randFruit<70) {
                fruit = new Fruit("framboise",this);
            }
            else if (randFruit>69 && randFruit<75) {
                fruit = new Fruit("chou-fleur",this);
            }
            else if (randFruit>74 && randFruit<80) {
                fruit = new Fruit("asperge",this);
            }
            else if (randFruit>79 && randFruit<85) {
                fruit = new Fruit("poivron",this);
            }
            else if (randFruit>84 && randFruit<90) {
                fruit = new Fruit("carotte",this);
            }
            else if (randFruit>89 && randFruit<95) {
                fruit = new Fruit("piment",this);
            }
            else if (randFruit>94 && randFruit<100) {
                fruit = new Fruit("radis",this);
            }
        }

        if (difficulte == "normal" && (mode == "traditionnel" || mode == "labyrinthe")){
            if (randFruit<6) {
                fruit = new Fruit("peche",this);
            }
            else if (randFruit>5 && randFruit<14) {
                fruit = new Fruit("pomme",this);
            }
            else if (randFruit>13 && randFruit<20) {
                fruit = new Fruit("banane",this);
            }
            else if (randFruit>19 && randFruit<28) {
                fruit = new Fruit("raisin",this);
            }
            else if (randFruit>27 && randFruit<36) {
                fruit = new Fruit("mure",this);
            }
            else if (randFruit>35 && randFruit<42) {
                fruit = new Fruit("pasteque",this);
            }
            else if (randFruit>41 && randFruit<50) {
                fruit = new Fruit("framboise",this);
            }
            else if (randFruit>49 && randFruit<60) {
                fruit = new Fruit("chou-fleur",this);
            }
            else if (randFruit>59 && randFruit<68) {
                fruit = new Fruit("asperge",this);
            }
            else if (randFruit>67 && randFruit<76) {
                fruit = new Fruit("poivron",this);
            }
            else if (randFruit>75 && randFruit<86) {
                fruit = new Fruit("carotte",this);
            }
            else if (randFruit>85 && randFruit<92) {
                fruit = new Fruit("piment",this);
            }
            else if (randFruit>91 && randFruit<100) {
                fruit = new Fruit("radis",this);
            }
        }

        if (difficulte == "hard" && (mode == "traditionnel" || mode == "labyrinthe")){
            if (randFruit<4) {
                fruit = new Fruit("peche",this);
            }
            else if (randFruit>3 && randFruit<10) {
                fruit = new Fruit("pomme",this);
            }
            else if (randFruit>9 && randFruit<12) {
                fruit = new Fruit("banane",this);
            }
            else if (randFruit>11 && randFruit<18) {
                fruit = new Fruit("raisin",this);
            }
            else if (randFruit>17 && randFruit<22) {
                fruit = new Fruit("mure",this);
            }
            else if (randFruit>21 && randFruit<26) {
                fruit = new Fruit("pasteque",this);
            }
            else if (randFruit>25 && randFruit<30) {
                fruit = new Fruit("framboise",this);
            }
            else if (randFruit>29 && randFruit<42) {
                fruit = new Fruit("chou-fleur",this);
            }
            else if (randFruit>41 && randFruit<54) {
                fruit = new Fruit("asperge",this);
            }
            else if (randFruit>53 && randFruit<66) {
                fruit = new Fruit("poivron",this);
            }
            else if (randFruit>65 && randFruit<78) {
                fruit = new Fruit("carotte",this);
            }
            else if (randFruit>77 && randFruit<88) {
                fruit = new Fruit("piment",this);
            }
            else if (randFruit>87 && randFruit<100) {
                fruit = new Fruit("radis",this);
            }
        }

        if (difficulte == "easy" && mode == "chrono"){
            if (randFruit<8) {
                fruit = new Fruit("peche",this);
            }
            else if (randFruit>7 && randFruit<18) {
                fruit = new Fruit("pomme",this);
            }
            else if (randFruit>17 && randFruit<28) {
                fruit = new Fruit("banane",this);
            }
            else if (randFruit>27 && randFruit<36) {
                fruit = new Fruit("raisin",this);
            }
            else if (randFruit>35 && randFruit<46) {
                fruit = new Fruit("mure",this);
            }
            else if (randFruit>45 && randFruit<54) {
                fruit = new Fruit("pasteque",this);
            }
            else if (randFruit>53 && randFruit<62) {
                fruit = new Fruit("framboise",this);
            }
            else if (randFruit>61 && randFruit<70) {
                fruit = new Fruit("ananas",this);
            }
            else if (randFruit>69 && randFruit<74) {
                fruit = new Fruit("chou-fleur",this);
            }
            else if (randFruit>73 && randFruit<78) {
                fruit = new Fruit("asperge",this);
            }
            else if (randFruit>77 && randFruit<82) {
                fruit = new Fruit("poivron",this);
            }
            else if (randFruit>81 && randFruit<88) {
                fruit = new Fruit("carotte",this);
            }
            else if (randFruit>87 && randFruit<90) {
                fruit = new Fruit("piment",this);
            }
            else if (randFruit>89 && randFruit<96) {
                fruit = new Fruit("radis",this);
            }
            else if (randFruit>95 && randFruit<100) {
                fruit = new Fruit("aubergine",this);
            }
        }

        if (difficulte == "normal" && mode == "chrono"){
            if (randFruit<4) {
                fruit = new Fruit("peche",this);
            }
            else if (randFruit>3 && randFruit<12) {
                fruit = new Fruit("pomme",this);
            }
            else if (randFruit>11 && randFruit<18) {
                fruit = new Fruit("banane",this);
            }
            else if (randFruit>17 && randFruit<24) {
                fruit = new Fruit("raisin",this);
            }
            else if (randFruit>23 && randFruit<32) {
                fruit = new Fruit("mure",this);
            }
            else if (randFruit>31 && randFruit<38) {
                fruit = new Fruit("pasteque",this);
            }
            else if (randFruit>37 && randFruit<42) {
                fruit = new Fruit("framboise",this);
            }
            else if (randFruit>41 && randFruit<50) {
                fruit = new Fruit("ananas",this);
            }
            else if (randFruit>49 && randFruit<58) {
                fruit = new Fruit("chou-fleur",this);
            }
            else if (randFruit>57 && randFruit<66) {
                fruit = new Fruit("asperge",this);
            }
            else if (randFruit>65 && randFruit<72) {
                fruit = new Fruit("poivron",this);
            }
            else if (randFruit>71 && randFruit<80) {
                fruit = new Fruit("carotte",this);
            }
            else if (randFruit>79 && randFruit<84) {
                fruit = new Fruit("piment",this);
            }
            else if (randFruit>83 && randFruit<92) {
                fruit = new Fruit("radis",this);
            }
            else if (randFruit>91 && randFruit<100) {
                fruit = new Fruit("aubergine",this);
            }
        }

        if (difficulte == "hard" && mode == "chrono"){
            if (randFruit<4) {
                fruit = new Fruit("peche",this);
            }
            else if (randFruit>3 && randFruit<10) {
                fruit = new Fruit("pomme",this);
            }
            else if (randFruit>9 && randFruit<12) {
                fruit = new Fruit("banane",this);
            }
            else if (randFruit>11 && randFruit<16) {
                fruit = new Fruit("raisin",this);
            }
            else if (randFruit>15 && randFruit<20) {
                fruit = new Fruit("mure",this);
            }
            else if (randFruit>19 && randFruit<24) {
                fruit = new Fruit("pasteque",this);
            }
            else if (randFruit>23 && randFruit<26) {
                fruit = new Fruit("framboise",this);
            }
            else if (randFruit>25 && randFruit<30) {
                fruit = new Fruit("ananas",this);
            }
            else if (randFruit>29 && randFruit<42) {
                fruit = new Fruit("chou-fleur",this);
            }
            else if (randFruit>41 && randFruit<52) {
                fruit = new Fruit("asperge",this);
            }
            else if (randFruit>51 && randFruit<62) {
                fruit = new Fruit("poivron",this);
            }
            else if (randFruit>61 && randFruit<72) {
                fruit = new Fruit("carotte",this);
            }
            else if (randFruit>71 && randFruit<80) {
                fruit = new Fruit("piment",this);
            }
            else if (randFruit>79 && randFruit<92) {
                fruit = new Fruit("radis",this);
            }
            else if (randFruit>91 && randFruit<100) {
                fruit = new Fruit("aubergine",this);
            }
        }

        if (difficulte == "easy" && (mode == "duo")){
            if (randFruit<8) {
                fruit = new Fruit("peche",this);
            }
            else if (randFruit>7 && randFruit<18) {
                fruit = new Fruit("pomme",this);
            }
            else if (randFruit>17 && randFruit<28) {
                fruit = new Fruit("banane",this);
            }
            else if (randFruit>27 && randFruit<38) {
                fruit = new Fruit("raisin",this);
            }
            else if (randFruit>37 && randFruit<48) {
                fruit = new Fruit("mure",this);
            }
            else if (randFruit>47 && randFruit<56) {
                fruit = new Fruit("pasteque",this);
            }
            else if (randFruit>55 && randFruit<64) {
                fruit = new Fruit("framboise",this);
            }
            else if (randFruit>63 && randFruit<70) {
                fruit = new Fruit("cerise",this);
            }
            else if (randFruit>69 && randFruit<75) {
                fruit = new Fruit("chou-fleur",this);
            }
            else if (randFruit>74 && randFruit<80) {
                fruit = new Fruit("asperge",this);
            }
            else if (randFruit>79 && randFruit<85) {
                fruit = new Fruit("poivron",this);
            }
            else if (randFruit>84 && randFruit<90) {
                fruit = new Fruit("carotte",this);
            }
            else if (randFruit>89 && randFruit<95) {
                fruit = new Fruit("piment",this);
            }
            else if (randFruit>94 && randFruit<100) {
                fruit = new Fruit("radis",this);
            }
        }

        if (difficulte == "normal" && mode == "duo") {
            if (randFruit < 6) {
                fruit = new Fruit("peche",this);
            } else if (randFruit > 5 && randFruit < 14) {
                fruit = new Fruit("pomme",this);
            } else if (randFruit > 13 && randFruit < 20) {
                fruit = new Fruit("banane",this);
            } else if (randFruit > 19 && randFruit < 26) {
                fruit = new Fruit("raisin",this);
            } else if (randFruit > 25 && randFruit < 32) {
                fruit = new Fruit("mure",this);
            } else if (randFruit > 31 && randFruit < 38) {
                fruit = new Fruit("pasteque",this);
            } else if (randFruit > 37 && randFruit < 44) {
                fruit = new Fruit("framboise",this);
            } else if (randFruit > 43 && randFruit < 50) {
                fruit = new Fruit("cerise",this);
            } else if (randFruit > 49 && randFruit < 60) {
                fruit = new Fruit("chou-fleur",this);
            } else if (randFruit > 59 && randFruit < 68) {
                fruit = new Fruit("asperge",this);
            } else if (randFruit > 67 && randFruit < 76) {
                fruit = new Fruit("poivron",this);
            } else if (randFruit > 75 && randFruit < 86) {
                fruit = new Fruit("carotte",this);
            } else if (randFruit > 85 && randFruit < 92) {
                fruit = new Fruit("piment",this);
            } else if (randFruit > 91 && randFruit < 100) {
                fruit = new Fruit("radis",this);
            }
        }

        if (difficulte == "hard" && mode == "duo"){
            if (randFruit<2) {
                fruit = new Fruit("peche",this);
            }
            else if (randFruit>1 && randFruit<6) {
                fruit = new Fruit("pomme",this);
            }
            else if (randFruit>5 && randFruit<10) {
                fruit = new Fruit("banane",this);
            }
            else if (randFruit>9 && randFruit<14) {
                fruit = new Fruit("raisin",this);
            }
            else if (randFruit>13 && randFruit<18) {
                fruit = new Fruit("mure",this);
            }
            else if (randFruit>17 && randFruit<22) {
                fruit = new Fruit("pasteque",this);
            }
            else if (randFruit>21 && randFruit<26) {
                fruit = new Fruit("framboise",this);
            }
            else if (randFruit>25 && randFruit<30) {
                fruit = new Fruit("cerise",this);
            }
            else if (randFruit>29 && randFruit<42) {
                fruit = new Fruit("chou-fleur",this);
            }
            else if (randFruit>41 && randFruit<54) {
                fruit = new Fruit("asperge",this);
            }
            else if (randFruit>53 && randFruit<66) {
                fruit = new Fruit("poivron",this);
            }
            else if (randFruit>65 && randFruit<78) {
                fruit = new Fruit("carotte",this);
            }
            else if (randFruit>77 && randFruit<88) {
                fruit = new Fruit("piment",this);
            }
            else if (randFruit>87 && randFruit<100) {
                fruit = new Fruit("radis",this);
            }
        }
        return fruit;
    }

    /**
     * Choisi entre le texte francais ou anglais selon la langue courante
     * @param fr texte francais
     * @param en texte anglais
     * @return un des deux textes
     */
    public String textFromLang(String fr, String en) {
        if (lang == "langFR") return fr;
        return en;
    }

    /**
     * Creer une partie de mode chrono en fonction de la difficulte
     */
    public void setChronoDifficulty(){
        switch(difficulty){
            case "easy":
                setChrono(new Chrono(90));
                break;
            case "normal":
                setChrono(new Chrono(60));
                break;
            case "hard":
                setChrono(new Chrono(30));
                break;
        }
    }

    public Snake getJ1() { return j1; }
    public Snake getJ2() { return j2; }
    public String getMode() { return mode; }
    public String getDifficulty() { return difficulty; }
    public String getTheme() { return theme; }
    public Score getScore() { return score; }

    public int getVOL_MIN() { return VOL_MIN; }
    public int getVOL_MAX() { return VOL_MAX;}
    public int getVOL_INIT_BRUITS() { return VOL_INIT_BRUITS; }
    public int getVOL_INIT_MUSIC() { return VOL_INIT_MUSIC; }
    public int getVolumeMusique() { return volumeMusique; }
    public int getVolumeBruits() { return volumeBruits; }
    public Clip getMusicClip() { return musicClip; }

    public List<Wall> getListeWall() { return listeWall; }
    public List<Objet> getListeObjetsLaby() { return listeObjetsLaby; }
    public List<Fruit> getListeFruit() { return listeFruit; }
    public List<Fruit> getToAdd() { return toAdd; }
    public int getMultiplicateur() { return multiplicateur; }
    public Chrono getChrono() { return chrono; }

    public Color getGREEN() { return GREEN; }
    public Color getLIGHT_GREEN() { return LIGHT_GREEN; }
    public Color getBLUE() { return BLUE; }
    public Color getLIGHT_BLUE() { return LIGHT_BLUE; }
    public Font getFONT_50() { return FONT_50; }
    public Font getFONT_38() { return FONT_38; }
    public Font getFONT_24() { return FONT_24; }
    public Font getFONT_18() { return FONT_18; }

    public void setJ1(Snake j1) { this.j1 = j1; }
    public void setMode(String mode) { this.mode = mode; }
    public void setDifficulty(String difficulty) { this.difficulty = difficulty; }
    public void setTheme(String theme) { this.theme = theme; }
    public void setScore(Score score) { this.score = score; }
    public void setVolumeMusique(int volumeMusique) { this.volumeMusique = volumeMusique; }
    public void setVolumeBruits(int volumeBruits) { this.volumeBruits = volumeBruits; }
    public void setMusicClip(Clip musicClip) { this.musicClip = musicClip; }
    public void setLang(String lang) { this.lang = lang; }

    public void setMultiplicateur(int multiplicateur) { this.multiplicateur = multiplicateur; }
    public void setChrono(Chrono chrono) { this.chrono = chrono; }

    public void setJ2(Snake j2) { this.j2 = j2; }
}