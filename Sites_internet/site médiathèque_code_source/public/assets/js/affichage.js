checkAffichage(); // Fonction pour vérifier quel sessionStorage est présent au chargement de la page et charger le style

//utilisation du session storage car perte quand réouverture du site sur navigateur
// à voir avec le client si utiliser local ou session

function confirmMessageList(variable, value) {
    if (confirm("Voulez-vous changer le mode d'affichage ?")) {
        // Clic sur OK
        sessionStorage.clear(); // On efface tous les sessionStorage avant d'attribuer celui du bouton
        sessionStorage.setItem(variable, value); // On crée le sessionStorage avec les arguments
        console.log("Les paramètres donnés par le onclick du bouton pour créer un sessionStorage : " + variable,value);
        console.log("La valeur du sessionStorage quand je clique : " + sessionStorage.getItem(variable));
        var icone = document.getElementById("icone")
        icone.style.display="none"
        icone.style.position="absolute"
        var liste = document.getElementById("liste")
        liste.style.display="block"
        liste.style.position="relative"
    }
}
function confirmMessageIcone(variable, value) {
    if (confirm("Voulez-vous changer le mode d'affichage ?")) {
        // Clic sur OK
        sessionStorage.clear(); // On efface tous les sessionStorage avant d'attribuer celui du bouton
        sessionStorage.setItem(variable, value); // On crée le sessionStorage avec les arguments
        console.log("Les paramètres donnés par le onclick du bouton pour créer un sessionStorage : " + variable,value);
        console.log("La valeur du localStorage quand je clique : " + sessionStorage.getItem(variable));
        var icone = document.getElementById("icone")
        icone.style.display="block"
        icone.style.position="relative"
        var liste = document.getElementById("liste")
        liste.style.display="none"
        liste.style.position="absolute"
    }
}


function checkAffichage()
{
    var icone = document.getElementById("icone")
    var liste = document.getElementById("liste")

    if(sessionStorage.getItem("liste")) // Si j'ai un sessionStorage qui a pour clé liste
    {
        console.log("On utilise affichage liste  : " + sessionStorage.getItem('liste'))
        icone.style.display = "none" // On applique le style
        liste.style.display = "block"
        icone.style.position = "absolute"
        liste.style.position = "relative"
    }
    else if(sessionStorage.getItem("icone")) // Si j'ai un sessionStorage qui a pour clé icone
    {
        console.log("On utilise affichage icone : " + sessionStorage.getItem('icone'));
        icone.style.display = "block" // On applique le style
        liste.style.display = "none"
        icone.style.position = "relative"
        liste.style.position = "absolute"
    }
}