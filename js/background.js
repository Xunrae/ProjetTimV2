let lesTextes = {
    code:{
        texte:[
            "gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_MIN_FILTER, gl.NEAREST);",
            "rb.velocity = new Vector3(0, 10, 0);",
            "$('#output').html($('#element').offset().top - $(window).scrollTop());",
            "foreach($array as $key=>$value)",
            "<!DOCTYPE glossary PUBLIC '-//OASIS//DTD DocBook V3.1//EN'>",
            "SELECT Count(*) AS DistinctCountries FROM (SELECT DISTINCT Country FROM Customers);"
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