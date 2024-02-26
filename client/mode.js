document.addEventListener("DOMContentLoaded", function () {

    const storedMode = localStorage.getItem("Mode");
    if (performance.navigation.type == 1) {
        localStorage.clear(); 
        localStorage.setItem("Mode", "Light");
        window.location.href = "index.php";
    }
    if (storedMode == "Dark") {
        mode();
    }

});


document.getElementById("btn").addEventListener("click", function () {

    const storedValue = localStorage.getItem("Mode");
    if(storedValue == "Dark"){
        localStorage.clear();
        localStorage.setItem("Mode", "Light");
        mode();
    }

    else if(storedValue == "Light"){
        localStorage.clear();
        localStorage.setItem("Mode", "Dark");
        mode();
    }
});

function mode(){
    const storedPage = localStorage.getItem("Page");
    if(storedPage != "Home" && storedPage != "Cikk"){
        localStorage.setItem("Page", "Home");
    }
    if(storedPage === "Home"){
        homeValt();
    }
    if(storedPage === "Cikk"){
        cikkValt();
    }









}