
const base_url = "http://localhost:63342/ApuntesPHP/UD7/Tarea7.1_Daniel_Armada/controller/FrontController.php";

window.onload = onceLoaded;


function onceLoaded() {

    console.debug("window loaded");
    document.querySelector('#formLogin').onsubmit = login;
    document.querySelector('#cerrarSesion').onsubmit = confirmLogoutClient;
    
    getRoles();
}

