let jsonData;

fetch('../json/Cheminement.json')
.then(response => response.json())
.then(data => convertirJson(data));

function convertirJson(d){
    jsonData = d;
}

let cours = document.getElementsByClassName("rond");

function addEventListenerList(list, event, fn){
    for(let i = 0; i<list.length; i++){
        list[i].addEventListener(event,fn,false);
    }
}

nodes = Array.prototype.slice.call(cours,0);
addEventListenerList(nodes,'click', ouvrirFenetre);

function ouvrirFenetre(){
    if(document.getElementById("descriptionCours")){
        document.getElementById("descriptionCours").remove();
    }
    const laPage = document.getElementById("page");
    let textTarget = event.target.innerText;
    let codeTarget = textTarget.slice(0,7);

    //crée un array
    let test1 = Object.entries(jsonData);

    let noSession = (event.target.dataset.session) -1;

    // 0 = session, 1 = objet qui contient toutes les valeurs(doit etre 1), codeTarget = code du cours
    //console.log(test1[noSession][1][codeTarget].Description);

    let div =  document.createElement("div");
    div.setAttribute("id","descriptionCours");
    let para = document.createElement("p");
    let contenu = document.createTextNode(test1[noSession][1][codeTarget].Description);

    para.appendChild(contenu);
    div.appendChild(para);
    laPage.appendChild(div);
}