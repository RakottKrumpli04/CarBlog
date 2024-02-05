document.addEventListener("DOMContentLoaded", function () {

    const storedMode = localStorage.getItem("Mode");
    if (performance.navigation.type == 1) {
        localStorage.clear(); 
        localStorage.setItem("Mode", "Light");
        window.location.href = "index.php";
    }
    if (storedMode == "Dark") {
        valt();
    }

});


document.getElementById("btn").addEventListener("click", function () {

    const storedValue = localStorage.getItem("Mode");
    if(storedValue == "Dark"){
        localStorage.clear();
        localStorage.setItem("Mode", "Light");
        valt();
    }

    else if(storedValue == "Light"){
        localStorage.clear();
        localStorage.setItem("Mode", "Dark");
        valt();
    }
});


function valt(){
    
    const elem = document.getElementById("btn")
    const storedValue = localStorage.getItem("Mode");
    const navbar = document.querySelector(".navbar");
    const navlink = document.querySelector(".nav-link");
    const rows = document.querySelectorAll(".row");
    const cimek = document.querySelectorAll(".cim");
    const leirasok = document.querySelectorAll(".leiras");
    const szovegek = document.querySelectorAll(".szoveg");
    const btn = document.querySelector(".btn");

if (storedValue === "Dark"){

    elem.innerHTML = "Világos mód";
    btn.classList.replace("btn-outline-dark", "btn-outline-light");

    document.body.style.backgroundColor = "#1E2022";

    navbar.classList.replace("navbar-light", "navbar-dark");
    navlink.classList.replace("navbar-light", "navbar-dark");
    document.querySelector(".navbar").style.background = "linear-gradient(270deg, #626a75 0%, #333c47 100%)";

    rows.forEach(row => {row.style.background = "radial-gradient(circle, #626a75 0%, #333c47 100%)";});
    cimek.forEach(cim => {cim.style.color = "whitesmoke"});
    leirasok.forEach(leiras => {leiras.style.color = "whitesmoke"});
    szovegek.forEach(szoveg => {szoveg.style.color = "whitesmoke"});

    document.querySelector(".footercolumn").style.background = "linear-gradient(270deg, #626a75 0%, #333c47 100%)";
    document.querySelector(".footercolumn").style.color = "whitesmoke";
    document.getElementById("sor").style.borderColor = "whitesmoke";
}

else if (storedValue === "Light"){

    elem.innerHTML = "Sötét mód";
    btn.classList.replace("btn-outline-light", "btn-outline-dark");

    document.body.style.backgroundColor = "rgb(236, 235, 225)";

    navbar.classList.replace("navbar-dark", "navbar-light");
    navlink.classList.replace("navbar-dark", "navbar-light");
    document.querySelector(".navbar").style.background = "linear-gradient(270deg, rgb(230, 230, 206) 0%, rgb(165, 165, 150) 100%)";

    rows.forEach(row => {row.style.background = "radial-gradient(circle, rgb(230, 230, 206) 0%, rgb(165, 165, 150) 100%)";});
    cimek.forEach(cim => {cim.style.color = "black"});
    leirasok.forEach(leiras => {leiras.style.color = "black"});
    szovegek.forEach(szoveg => {szoveg.style.color = "black"});

    document.querySelector(".footercolumn").style.background = "linear-gradient(270deg, rgb(230, 230, 206) 0%, rgb(165, 165, 150) 100%)";
    document.querySelector(".footercolumn").style.color = "black";
    document.getElementById("sor").style.borderColor = "black";
} 
}