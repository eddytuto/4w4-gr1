(function(){
  console.log("vive la boîte modale")  
  let boite__modale = document.querySelector(".boite__modale")
  let cours__desc__bouton = document.querySelectorAll('.cours__desc__bouton')
  console.log(cours__desc__bouton.length)  

  for (const bout of cours__desc__bouton) {
      bout.addEventListener('mousedown',function(){
        boite__modale.classList.add('boite__modale--ouvrir')

      })
  }

  boite__modale.addEventListener('mousedown', function(){
    boite__modale.classList.remove('boite__modale--ouvrir')
  })

  /*
this.parentNode
this.parentNode.children(2)
  */

})()