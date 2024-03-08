
const base_url = "http://localhost:63343/ApuntesPHP/UD7/UD7_Ejemplo_SPA-main/controller/FrontController.php";

window.onload = onceLoaded;


function onceLoaded() {

    console.debug("window loaded");
    document.querySelector('#formLogin').onsubmit = login;
    document.getElementById("btnCerrar").addEventListener("click", confirmLogoutClient);
    
    getRoles();
}

