
let projets = document.getElementsByClassName("projet");
let descriptions = document.getElementsByClassName("description");


let animationDurationNum = descriptions[0].style.animationDuration;


//Ajouter les listeners
for (let i = 0; i < projets.length; i++) {

    projets[i].addEventListener("click",montrerDescription,false);
    
}


function montrerDescription(evt) {
                        
    let classeAnim = evt.target.classList.item(1);

    if (classeAnim == null) {
        evt.target.classList.add("fade-in");
        setTimeout(() => evt.target.style.animationPlayState = "paused", 1000);

        return;
    }

    

    if (evt.target.style.animationPlayState == "running") {
        //Jouer lanimation keyframe de fade-in
        setTimeout(() => evt.target.style.animationPlayState = "paused", 1000);

        return;
       

    }

    if (evt.target.style.animationPlayState == "paused") {
        //Jouer lanimation keyframe de fade-out
        evt.target.style.animationPlayState = "running";
        setTimeout(() => evt.target.style.animationPlayState = "paused", 1000);

        return;
    }

    
    
}