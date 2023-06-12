// Obtén una referencia al elemento de la segunda imagen
var img2 = document.getElementById('logo');
var nombre=document.getElementById('Andrea');
var naranja = document.getElementById('naranja');

// Agrega un event listener para el evento de desplazamiento (scroll)
window.addEventListener('scroll', function() {
  
 
    naranja.style.opacity=0;
    if(window.scrollY===0){
      naranja.style.opacity=1;
    }
  
   
});




/*Por alguna razon, la pagina esta guardando la posicion de scroll verticall que tenia*/
/*Por eso recargo a la posicion inicial con el siguiente codigo*/


// Almaceno la posición actual de la página en sessionStorage
window.addEventListener("beforeunload", function() {
  if (!sessionStorage.getItem("isReloaded")) {
    sessionStorage.removeItem("scrollPos");
  }
});

// Llama a esta función cuando la página se haya cargado completamente
window.onload = function() {
  if (!sessionStorage.getItem("isReloaded")) {
    sessionStorage.setItem("isReloaded", "true");
    // Recarga la página desde el inicio
    window.location.reload(true);
  } else {
    sessionStorage.removeItem("isReloaded");
  }
}


/*Obtiene el tamaño de la ventana y lo muestra en la consola del navegador
console.log("Ancho de la pantalla: " + window.innerWidth + "px");=1920px
console.log("Alto de la pantalla: " + window.innerHeight + "px");=815px*/







