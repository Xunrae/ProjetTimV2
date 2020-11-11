let jsonData;
fetch('../json/Cheminement.json')
.then(response => response.json())
.then(data => convertirJson(data));
//petite fonction pour recevoir le contenu json
function convertirJson(d){
    jsonData = d;
}

let cours = document.getElementsByClassName("rond");
nodes = Array.prototype.slice.call(cours,0);
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
    if(document.getElementById("descriptionCours")){
        document.getElementById("descriptionCours").remove();
    }

    const laPage = document.getElementById("page");

    let textTarget = event.target.innerText;
    let codeTarget = textTarget.slice(0,7);

    //crée un array avec le contenu json
    let arrayData = Object.entries(jsonData);
    
    //va chercher le # de la session associée à la pastille
    let noSession = (event.target.dataset.session) -1;

    //crée un div avec id pour css
    let div =  document.createElement("div");
    div.setAttribute("id","descriptionCours");
    //paragraphe pour div
    let para = document.createElement("p");
  
    //va chercher la description du cours dans le contenu json
    let contenu = document.createTextNode(arrayData[noSession][1][codeTarget].Description);

    //crée un span pour fermer la fenêtre
    let fermeture = document.createElement("span");
    fermeture.innerHTML = "&#10006;";
    fermeture.addEventListener('click',fermerFenetre);

    //associe elements assemblés
    para.appendChild(contenu);
    div.appendChild(para);
    div.appendChild(fermeture);
    laPage.appendChild(div);
}

//petite fonction qui détruit la fenetre créée dans ouvrirFenetre()
function fermerFenetre(){
    document.getElementById("descriptionCours").remove();
}