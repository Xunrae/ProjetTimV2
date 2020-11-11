
let projets = document.getElementsByClassName("projet");
let descriptions = document.getElementsByClassName("description");

console.log(projets,descriptions);


descriptions[0].style.animationDuration = "1s";
let animationDurationNum = descriptions[0].style.animationDuration;


//Ajouter les listeners
for (let i = 0; i < projets.length; i++) {

    projets[i].addEventListener("click",montrerDescription,false);
    
}


function montrerDescription(evt) {
                        
    let classeAnim = evt.target.classList.item(1);

    if (classeAnim == null) {
        evt.target.classList.add("fade-in");
        setTimeout(() => evt.target.style.animationPlayState = "paused", 500);
    }

    
    //console.log(parseFloat(descriptions[0].style.animationDuration));
    console.log(evt.target.classList);
    

    if (evt.target.style.animationPlayState == "running") {
        //Jouer lanimation keyframe de fade-in
        setTimeout(() => evt.target.style.animationPlayState = "paused", 500);
       

    }

    if (evt.target.style.animationPlayState == "paused") {
        //Jouer lanimation keyframe de fade-out
        evt.target.style.animationPlayState = "running";
        //setTimeout(() => descriptions[0].style.animationPlayState = "paused", 500);
    }

   

    console.log(classeAnim);

    
    
}