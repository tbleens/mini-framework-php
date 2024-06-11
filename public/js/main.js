(function(){

    let positionScroll = 0;

    document.addEventListener("scroll", (event) => {
        positionScroll = window.scrollY;
        let element = document.getElementsByClassName("main");

        console.log(positionScroll);
      
        if(positionScroll >= 20){
            
            element[0].classList.add('active')

        }
        else{
            element[0].classList.remove('active')
    }
      });

})();