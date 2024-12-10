
document.addEventListener("DOMContentLoaded", () => {
    const preloader = document.getElementById("preloader-container");
    
    // Esperar a que se cargue completamente la página
    window.onload = () => {
        preloader.classList.add("hidden"); // Añade la clase para ocultar el preloader
        document.body.classList.add("loaded"); // Habilitar el scroll
    };
});

/* funcion de carga */
var loader = document.getElementById("preloader");
window.addEventListener("load", function(){
    loader.style.display= "none";
});