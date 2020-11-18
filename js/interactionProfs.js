let jsonData;
fetch('../json/Prof.json')
.then(response => response.json())
.then(data => convertirJson(data));
//petite fonction pour recevoir le contenu json
function convertirJson(d){
    jsonData = d;
}

let cours = document.getElementsByClassName("boutonProf");
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
    if(document.getElementById("descriptionProf")){
        document.getElementById("descriptionProf").classList.remove("animOuverture");
        document.getElementById("descriptionProf").classList.add("animFermeture");
        setTimeout(() =>document.getElementById("descriptionProf").remove(), 500);
    }

    const laPage = document.getElementById("page");

    let textTarget = event.target.innerText;

    //crée un array avec le contenu json
    let arrayData = Object.entries(jsonData);
    
    //va chercher le # du prof pour le fichier JSON
    let noProf = event.target.dataset.noprof;

    //crée un div avec id pour css
    let div =  document.createElement("div");
    div.setAttribute("id","descriptionProf");
    div.classList.add("animOuverture")
    //paragraphe pour div
    let para = document.createElement("p");
    let photo = document.createElement("img");

    photo.setAttribute("src",arrayData[noProf][1].Photo);
    photo.setAttribute("alt","Photo de "+arrayData[noProf][1].Nom);
    
    //va chercher la description du cours dans le contenu json
    let contenu = document.createTextNode(arrayData[noProf][1].Description);

    //crée un span pour fermer la fenêtre
    let fermeture = document.createElement("span");
    fermeture.innerHTML = "&#10006;";
    fermeture.addEventListener('click',fermerFenetre);

    //associe elements assemblés
    para.appendChild(contenu);
    div.appendChild(para);
    div.appendChild(photo);
    div.appendChild(fermeture);
    laPage.appendChild(div);
}

//petite fonction qui détruit la fenetre créée dans ouvrirFenetre()
function fermerFenetre(){
    document.getElementById("descriptionProf").classList.remove("animOuverture");
    document.getElementById("descriptionProf").classList.add("animFermeture");
    setTimeout(() =>document.getElementById("descriptionProf").remove(), 500);
}