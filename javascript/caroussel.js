(function(){
  console.log("vive la boîte modale")  
  let boite__modale = document.querySelector(".boite__modale")
  let galerie__img = document.querySelectorAll('.galerie .wp-block-image img')
  console.log("galerie__img.length = " + galerie__img.length)
  let boite__modale__ferme = document.querySelector(".boite__modale__ferme")
  let boite__modale__texte = document.querySelector(".boite__modale__texte")
  
  boite__modale__ferme.addEventListener('mousedown', function(){
    boite__modale.classList.remove('boite__modale--ouvrir')
  })

  let image = document.createElement('img')
  boite__modale__texte.appendChild(image)
  //img.setAttribute("src", "#")


  for (const img of galerie__img) {
      img.addEventListener('mousedown',function(){
        boite__modale.classList.add('boite__modale--ouvrir')
        console.log(this.getAttribute('src'))
        let source = this.getAttribute('src')
        image.setAttribute('src',source)
      })
  }



  /*
this.parentNode
this.parentNode.children(2)
  */

})()