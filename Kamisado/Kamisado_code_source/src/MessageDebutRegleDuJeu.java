import javax.swing.*;
import java.awt.*;
import java.awt.event.WindowAdapter;
import java.awt.event.WindowEvent;

/*création de cette classe pour créer une fenêtre de dialogue pour afficher quelques infos à chauqe début de partie***/
class MessageDebutRegleDuJeu extends JDialog {

    //ATTRIBUTS
    //variable pour initialiser combien de temps le message sera affiché
    protected long time;
    //création JLabel pour ajouter le message à l'interieur
    protected JLabel lMessage;
    //création variable pour le message
    protected String sMessage;

    /**Méthode pour initialiser les attributs du message
     * @param frame initialiser la frame
     * @param titre initaliser le titre
     * @param time initialiser le temps de l'affichage**/
    public MessageDebutRegleDuJeu(Frame frame, String titre, long time) {
        super(frame, titre);
        this.time = time;
        //initialisation du message
        String bloc1 = "<html>Sélectionner la <strong style='color: blue;'>tour</strong> de votre choix<br>";
        String bloc2 = "puis cliquer sur la <strong style='color: blue;'>case</strong> sur laquelle<br>";
        String bloc3 = "vous souhaitez la poser.<br><br>";
        String bloc4 = "Le joueur <strong style='color:blue;'>blanc </strong>commence la partie!<br><br>";
        String bloc5 = "Bon jeu <strong style='color:red;'> :) </strong></html>";
        sMessage = bloc1+bloc2+bloc3+bloc4+bloc5;
        //ajout du message au panel
        lMessage = new JLabel(sMessage, SwingConstants.CENTER);
        //design du label
        lMessage.setPreferredSize(new Dimension(400, 200));
        Font f = new Font ("monospaces", Font.BOLD, 12);
        lMessage.setFont(f);
        lMessage.setBorder(BorderFactory.createEmptyBorder(30,30,30,30));

        //création JLabel pour insérer une image
        JLabel lIcon= new JLabel();
        lIcon.setIcon(new ImageIcon("img/Kamisado.png"));
        //création du JPanel contenant ce JLabel
        JPanel panIcone = new JPanel();
        panIcone.add(lIcon);
        //création panel pour ajouter le label du message
        JPanel panMessage = new JPanel();
        panMessage.add(lMessage);
        //création d'un panel contenant les 2 panels : (img+message)
        JPanel panEnsemble = new JPanel();
        panEnsemble.add(panMessage);
        panEnsemble.add(panIcone);
        //création panel final contenant le panel d'ensemble
        JPanel panFinal = new JPanel();
        panFinal.add(panEnsemble);
        //ajout du panel final dans la frame
        add(panFinal);
        pack();
        setDefaultCloseOperation(DISPOSE_ON_CLOSE);
        setLocationRelativeTo(frame);

        //ajout d'un windowsListener pour permettre à ce message de se fermer automatiquement au bout d'un certain temps
        addWindowListener(new WindowAdapter() {

            @Override
            public void windowOpened(WindowEvent e) {
                new Thread(() -> {
                    try {
                        Thread.sleep(MessageDebutRegleDuJeu.this.time);
                    } catch (InterruptedException ex) {
                        ex.printStackTrace();
                    } finally {
                        dispose();
                    }
                }).start();
            }
        });
    }

    /**Méthode permettant d'initialiser le message
     * @param titre initialise le titre
     * @param titre initaliser le titre
     * @param time initialiser le temps de l'affichage**/
    public static void showAutoCloseDialog(Frame frame, String titre, long time) {
        MessageDebutRegleDuJeu dialog = new MessageDebutRegleDuJeu(frame, titre, time);
        dialog.setVisible(true);
    }
}
