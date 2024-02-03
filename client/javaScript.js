function valt(){
        const elem = document.querySelector(".btn");
        const navbar = document.querySelector(".navbar");
        const navlink = document.querySelector(".nav-link");
        const rows = document.querySelectorAll(".row");
        const cimek = document.querySelectorAll(".cim");
        const leirasok = document.querySelectorAll(".leiras");
        const szovegek = document.querySelectorAll(".szoveg");
        const sor = document.querySelector(".sor");

    if (elem.innerHTML == "Sötét mód"){

        elem.innerHTML = "Világos mód";
        btn.classList.replace("btn-outline-dark", "btn-outline-light");

        document.body.style.backgroundColor = "#1E2022";

        navbar.classList.replace("navbar-light", "navbar-dark");
        navlink.classList.replace("navbar-light", "navbar-dark");
        document.querySelector(".navbar").style.background = "linear-gradient(270deg, #626a75 0%, #333c47 100%)";

        rows.forEach(row => {row.style.background = "radial-gradient(circle, #626a75 0%, #333c47 100%)";});
        cimek.forEach(cim => {cim.style.color = "white"});
        leirasok.forEach(leiras => {leiras.style.color = "white"});
        szovegek.forEach(szoveg => {szoveg.style.color = "white"});

        document.querySelector(".footercolumn").style.background = "linear-gradient(270deg, #626a75 0%, #333c47 100%)";
        document.querySelector(".footercolumn").style.color = "white";
        document.getElementById("sor").style.borderColor = "white";

        localStorage.setItem("btn", "Világos mód");
    }


    else {

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

        localStorage.setItem("btn", "Sötét mód");
    } 
}