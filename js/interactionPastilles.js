let cours = document.getElementsByClassName("rond");

nodes = Array.prototype.slice.call(cours,0);
nodes.forEach(ajoutListener);

function ajoutListener(){
    this.addEventListener('click',ouvrirFenetre,false);
}

function ouvrirFenetre(){
    console.log("it werks");
    let div =  document.createElement("div");
    let para = document.createElement("p");
    let contenu = document.createTextNode('<?= $fichier?>');
}