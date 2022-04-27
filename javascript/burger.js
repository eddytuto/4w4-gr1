(function(){
    let burger = document.querySelector(".burger")
    burger.addEventListener('mousedown', function(){
        console.log("burger")
        if (!this.classList.contains('burger__X'))
        {
           this.classList.add('burger__X') 
        }
        else
        {
            this.classList.remove('burger__X') 
        } 
    }) 
})()