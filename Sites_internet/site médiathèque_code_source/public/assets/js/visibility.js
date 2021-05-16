

// a voir si laisse filtre tous ouvert ou pas

function toggle_visibility(id) {
    var e = document.getElementById(id);
    if(e.style.visibility === 'hidden')
        e.style.visibility = 'visible';
    else
        e.style.visibility = 'hidden';
}

function affichageZonePrix(caseACocher)
{
    var prix = document.getElementById("ouvert");
    if (caseACocher.checked) {
        console.log("coucou");
        if(prix.style.visibility === 'hidden')
            prix.style.visibility = "visible";
        else
            prix.style.visibility = "visible";
    }
    else {
        console.log("hello");
        if(prix.style.visibility === 'visible')
            prix.style.visibility = "hidden";
        else
            prix.style.visibility = "hidden";
    }

}

function btn_icone(x){
    x.classList.toggle("fa-arrow-down");
}


function check() {
    var val = document.getElementById("check").checked;
    if (document.getElementById("ckeck").checked === true) {
        document.write(val);
    }
}


let hiders = document.querySelectorAll('[data-js="hide"]');

Array.prototype.forEach.call(hiders, function (hider) {
    let hiderID = hider.getAttribute('href');
    let hiderTarget = document.querySelector(hiderID);

    hider.addEventListener('click', function (event) {
       event.preventDefault();
        hiderTarget.classList.toggle('-visible');
    });
});