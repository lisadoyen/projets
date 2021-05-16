function visible_genre(){
    var livre_genre = document.getElementById("livre_genre");
    var video_genre = document.getElementById("video_genre");

    var livre_rubrique = document.getElementById("livre_rubrique");
    var video_rubrique = document.getElementById("video_rubrique");

    const test = document.querySelectorAll('input[name="categories[]"]:checked');

    let values = [];
    test.forEach((checkbox) =>{
        values.push(checkbox.value);
    })
    console.log(values);

    video_genre.style.display = "none"
    livre_genre.style.display = "none"
    video_rubrique.style.display = "none"
    livre_rubrique.style.display = "none"

    for ( i=0; i<values.length;i++) {
        console.log(values[i])
        if (values[i] === "1") {
            livre_genre.style.display = "block"
            livre_rubrique.style.display = "block"
        }
        if (values[i] === "2") {
            video_genre.style.display = "block"
            video_rubrique.style.display = "block"
        }
        if (values[i] === "3") {
            alert('jeu')
        }
        if (values[i] === "4") {
            alert('musique')
        }
    }
}

document.addEventListener("DOMContentLoaded", function() {
    visible_genre()
});
