function cikkValt(){
    
    const elem = document.getElementById("btn");
    const btnSzuro = document.getElementById("btnSzuro");
    const storedValue = localStorage.getItem("Mode");
    const navbar = document.querySelector(".navbar");
    const navlink = document.querySelector(".nav-link");
    const selectek = document.querySelectorAll(".form-select");
    const rows = document.querySelectorAll(".flipcard");
    const cimek = document.querySelectorAll(".cim");
    const cimhatter = document.querySelectorAll(".cimhatter");
    const leirasok = document.querySelectorAll(".leiras");
    const leirashatter = document.querySelectorAll(".leirashatter");
    const szovegek = document.querySelectorAll(".szoveg");
    const fakeimg = document.querySelectorAll(".fakeimg");
    const image = document.querySelector('#torles');
 

if (storedValue === "Dark"){

    elem.innerHTML = "Világos mód";
    elem.classList.replace("btn-outline-dark", "btn-outline-light");
    btnSzuro.classList.replace("btn-outline-dark", "btn-outline-light");
    document.querySelector("#btn").style.backgroundColor = "#333c47";
    document.querySelector("#btnSzuro").style.backgroundColor = "#333c47";
    selectek.forEach(select => {select.style.color = "whitesmoke"});
    selectek.forEach(select => {select.style.backgroundColor = "#333c47"});
    selectek.forEach(select => {select.style.borderColor = "whitesmoke"});
    image.src = 'svg/wtorles.svg';
    document.querySelector("#bin").style.backgroundColor = "#333c47";
    document.querySelector("#bin").style.color = "whitesmoke";
    document.querySelector("#bin").style.borderColor = "whitesmoke";

    document.body.style.backgroundColor = "#1E2022";

    navbar.classList.replace("navbar-light", "navbar-dark");
    navlink.classList.replace("navbar-light", "navbar-dark");
    document.querySelector(".navbar").style.background = "linear-gradient(270deg, #626a75 0%, #333c47 100%)";

    rows.forEach(row => {row.style.background = "radial-gradient(circle, #626a75 0%, #333c47 100%)";});
    cimek.forEach(cim => {cim.style.color = "whitesmoke"});
    leirasok.forEach(leiras => {leiras.style.color = "whitesmoke"});
    szovegek.forEach(szoveg => {szoveg.style.color = "whitesmoke"});
    cimhatter.forEach(function(cimhatter) {cimhatter.style.backgroundColor = 'rgba(51, 60, 71, 0.85)';});
    leirashatter.forEach(function(leirashatter) {leirashatter.style.backgroundColor = 'rgba(51, 60, 71, 0.9)';});

    document.querySelector(".footercolumn").style.background = "linear-gradient(270deg, #626a75 0%, #333c47 100%)";
    document.querySelector(".footercolumn").style.color = "whitesmoke";
    document.getElementById("sor").style.borderColor = "whitesmoke";
    fakeimg.forEach(function(fakeimg) {fakeimg.style.backgroundColor = "#1E2022";});

}

else if (storedValue === "Light"){

    elem.innerHTML = "Sötét mód";
    elem.classList.replace("btn-outline-light", "btn-outline-dark");
    btnSzuro.classList.replace("btn-outline-light", "btn-outline-dark");
    document.querySelector("#btn").style.backgroundColor = "rgb(197, 197, 175)";
    document.querySelector("#btnSzuro").style.backgroundColor = "rgb(197, 197, 175)";
    selectek.forEach(select => {select.style.color = "black"});
    selectek.forEach(select => {select.style.backgroundColor = "rgb(197, 197, 175)"});
    selectek.forEach(select => {select.style.borderColor = "black"});
    image.src = 'svg/btorles.svg';
    document.querySelector("#bin").style.backgroundColor = "rgb(197, 197, 175)";
    document.querySelector("#bin").style.color = "black";
    document.querySelector("#bin").style.borderColor = "black";


    document.body.style.backgroundColor = "rgb(236, 235, 225)";

    navbar.classList.replace("navbar-dark", "navbar-light");
    navlink.classList.replace("navbar-dark", "navbar-light");
    document.querySelector(".navbar").style.background = "linear-gradient(270deg, rgb(230, 230, 206) 0%, rgb(165, 165, 150) 100%)";

    rows.forEach(row => {row.style.background = "radial-gradient(circle, rgb(230, 230, 206) 0%, rgb(165, 165, 150) 100%)";});
    cimek.forEach(cim => {cim.style.color = "black"});
    leirasok.forEach(leiras => {leiras.style.color = "black"});
    szovegek.forEach(szoveg => {szoveg.style.color = "black"});
    cimhatter.forEach(function(cimhatter) {cimhatter.style.backgroundColor = "rgba(197, 197, 175, 0.85)";});
    leirashatter.forEach(function(leirashatter) {leirashatter.style.backgroundColor = "rgba(197, 197, 175, 0.9)";});

    document.querySelector(".footercolumn").style.background = "linear-gradient(270deg, rgb(230, 230, 206) 0%, rgb(165, 165, 150) 100%)";
    document.querySelector(".footercolumn").style.color = "black";
    document.getElementById("sor").style.borderColor = "black";
    fakeimg.forEach(function(fakeimg) {fakeimg.style.backgroundColor = "rgb(236, 235, 225)";}); 
} 
}