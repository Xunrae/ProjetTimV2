let lesTextes = {
    code:{
        texte:[
            "$tousCours = json_decode(file_get_contents($fichier), true);",
            "document.createTextNode(arrayData[noSession][1][codeTarget].Description);",
            "this.addEventListener('click',ouvrirFenetre,false);",
            "document.createTextNode('Pondération : '+arrayData[noSession][1][codeTarget].Pondération);",
            "<p data-session='<?= $noSession?>'><?= $unCours['NomCours']?></p>",
            "<div class='projet' title='Cliquez pour afficher la description'>"
        ]
    }
};

// crée des balise p et les associes aux classes avec des animations. Animation dans(footer.scss)

for(let i=0; i < lesTextes.code.texte.length; i++){
    let nouveauP = document.createElement("p");
    let nouveauTexte = document.createTextNode(lesTextes.code.texte[i]);
    nouveauP.appendChild(nouveauTexte);
   
    switch(i){
        case 0: nouveauP.classList.add("animationBackground");
            break;
        
        case 1: nouveauP.classList.add("animationBackground2");
            break;
                
        case 2: nouveauP.classList.add("animationBackground3");
            break;
 
        case 3: nouveauP.classList.add("animationBackground4");
            break;
        
        case 4: nouveauP.classList.add("animationBackground5");
            break;
        
        case 5: nouveauP.classList.add("animationBackground6");
            break;
        
        default: break;
    }
    document.body.prepend(nouveauP);
}