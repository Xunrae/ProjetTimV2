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

for($i=0; $i < lesTextes.code.texte.length; $i++){
    let nouveauP = document.createElement("p");
    let nouveauTexte = document.createTextNode(lesTextes.code.texte[$i]);
    nouveauP.appendChild(nouveauTexte);
    $randomAnimation = Math.random()*(5-1)+1;
    if(($i == 1)||($i == 5)){
        nouveauP.classList.add("animationBackground");
    }
    else if(($i == 2)||($i == 4)){
        nouveauP.classList.add("animationBackground2");
    }
    else{
        nouveauP.classList.add("animationBackground3");
    }
    nouveauP.style.marginTop = $i * 120;
    document.body.prepend(nouveauP);
}

console.log(document.getElementsByClassName("animationBackground").childElementCount);