(function(){
let boite_modale = document.querySelector(".boite__modale")
let bouton_fermer = document.querySelector(".boite__modale__bouton")
let cours__desc__bouton  =document.querySelectorAll('.cours__desc__bouton')
console.log(cours__desc__bouton.length)
for (const bout of cours__desc__bouton) {
    bout.addEventListener("mousedown",function(){
        boite_modale.classList.add('boite__modale--ouvrir')
    })
}
bouton_fermer.addEventListener("mousedown",function(){
    boite_modale.classList.remove('boite__modale--ouvrir')
})

})()