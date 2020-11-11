let cours = document.getElementsByClassName("rond");

nodes = Array.prototype.slice.call(cours,0);
nodes.forEach(ajoutListener);

for(let i = 1; i<=1; i++){
    let triangle = document.getElementById("triangle");
let length = triangle.getTotalLength();
triangle.style.strokeDasharray = length;

// Hide the triangle by offsetting dash. Remove this line to show the triangle before scroll draw
triangle.style.strokeDashoffset = length;

// Find scroll percentage on scroll (using cross-browser properties), and offset dash same amount as percentage scrolled
window.addEventListener("scroll", myFunction);

function myFunction() {
let scrollpercent = (document.body.scrollTop + document.documentElement.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);

  let draw = length * scrollpercent;
  
  // Reverse the drawing (when scrolling upwards)
  triangle.style.strokeDashoffset = length - draw;
}

triangle.style.stroke = "black";
triangle.style.position = "fixed";
}
console.log(triangle);
function ajoutListener(){
    this.addEventListener('click',ouvrirFenetre,false);
    
}

function ouvrirFenetre(){
    console.log("it werks");
    let div =  document.createElement("div");
    let para = document.createElement("p");
    let contenu = document.createTextNode('<?= $fichier?>');
    
}