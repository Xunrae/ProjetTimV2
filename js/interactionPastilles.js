let jsonData;
fetch('../json/Cheminement.json')
.then(response => response.json())
.then(data => convertirJson(data));
//petite fonction pour recevoir le contenu json
function convertirJson(d){
    jsonData = d;
}

let cours = document.getElementsByClassName("rond");
let nodes = Array.prototype.slice.call(cours,0);
addEventListenerList(nodes,'click', ouvrirFenetre);

function ajoutListener(){
    this.addEventListener('click',ouvrirFenetre,false);
}
    
/**
  * Fonction qui ajoute des écouteurs d'événements sur tous les éléments de la liste donnée
  * @author Antoine Côté-L'Écuyer
  * @param list:liste qui doit recevoir les evenements, event:quel evenement, fn:fonction à enclencher
  * @return none
  *
  */ 
function addEventListenerList(list, event, fn){
    for(let i = 0; i<list.length; i++){
        list[i].addEventListener(event,fn,false);
    }
}

/**
  * Fonction qui crée une nouvelle fenêtre à partir de contenu json
  * @author Antoine Côté-L'Écuyer
  * @param none
  * @return none
  *
  */ 
function ouvrirFenetre(){
    //s'il existe deja une description de cours affichée sur la page
    if(document.getElementById("descriptionCours")){
        document.getElementById("descriptionCours").classList.remove("animOuverture");
        document.getElementById("descriptionCours").classList.add("animFermeture");
        document.getElementById("descriptionCours").remove()
        //setTimeout(() =>document.getElementById("descriptionCours").remove(), 500);
    }

    const laPage = document.getElementById("page");

    //tous les h3 Session, pour pouvoir aligner la description à la session
    const lesSessions = document.getElementsByTagName("h3")

    //le code de la cible "XXX-XXX" est le code du cours.
    let codeTarget = event.target.dataset.code;

    //crée un array avec le contenu json
    let arrayData = Object.entries(jsonData);
    
    //va chercher le # de la session associée à la pastille
    let noSession = (event.target.dataset.session) -1;

    let laSession;
    for (let i = 0; i < lesSessions.length; i++){
        if(lesSessions[i].textContent == "Session "+(noSession+1)){
            laSession = lesSessions[i];
        }
    }

    //crée un div avec id pour css
    let div =  document.createElement("div");
    div.setAttribute("id","descriptionCours");
    div.classList.add("animOuverture");


    //paragraphe pour nom du cours
    let nomCours = document.createElement("h4");
    nomCours.setAttribute("class", "nomCoursDescription");

    //paragraphe pour code du cours
    let codeCours = document.createElement("h5");
    codeCours.setAttribute("class", "nomCoursDescription");

    //paragraphe pour div
    let para = document.createElement("p");

    //va chercher le nom du cours dans son json
    let contenuNomCours = document.createTextNode(arrayData[noSession][1][codeTarget].NomCours.slice(11,100));
    //va chercher le code du cours dans son json
    let contenuCodeCours = document.createTextNode(arrayData[noSession][1][codeTarget].NomCours.slice(0,7));
    //va chercher la description du cours dans le contenu json
    let contenu = document.createTextNode(arrayData[noSession][1][codeTarget].Description);

    //crée un span pour fermer la fenêtre
    let fermeture = document.createElement("span");
    fermeture.innerHTML = "&#10006;";
    fermeture.addEventListener('click',fermerFenetre);

    //associe elements assemblés
    nomCours.appendChild(contenuNomCours);
    codeCours.appendChild(contenuCodeCours);
    para.appendChild(contenu);
    div.appendChild(nomCours);
    div.appendChild(codeCours);
    div.appendChild(para);
    div.appendChild(fermeture);
    laSession.parentNode.appendChild(div);
}

//petite fonction qui détruit la fenetre créée dans ouvrirFenetre()
function fermerFenetre(){
    document.getElementById("descriptionCours").classList.remove("animOuverture");
    document.getElementById("descriptionCours").classList.add("animFermeture");
    document.getElementById("descriptionCours").remove()
    //window.setTimeout(() => document.getElementById("descriptionCours").remove(), 500);
}