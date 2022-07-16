document.addEventListener('DOMContentLoaded', function(){

addEventListener();
darkMode();
});


function addEventListener(){

    const menuMobile = document.querySelector('.mobile_menu');

    menuMobile.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive(){
    const navegacion = document.querySelector('.navegacion');

    /*
    if(navegacion.classList.contains('mostrar')){
        navegacion.classList.remove('mostrar')
    }else{ navegacion.classList.add('mostrar') }
*/
    navegacion.classList.toggle('mostrar');//lo  mismo de arriba pero menos codigo
}


function darkMode(){

     //revisa si la preferencia del sistema es tema oscuro o claro
    const preferencia = window.matchMedia('(prefers-color-scheme: dark)');

    if(preferencia.matches){
        document.body.classList.add('dark_mode');
    }else{
        document.body.classList.remove('dark_mode');
    }

    preferencia.addEventListener('change',function(){

        if(preferencia.matches){
            document.body.classList.add('dark_mode');
        }else{
            document.body.classList.remove('dark_mode');
        }
    })

    const btndarkMode = document.querySelector('.dark-mode');

    btndarkMode.addEventListener('click', function(){
       document.body.classList.toggle('dark_mode');
    });

   
}