function valt(){
    const elem = document.querySelector(".btn");
    const navbar = document.querySelector(".navbar");
    const navlink = document.querySelector(".nav-link");
    const rows = document.querySelectorAll(".row");


    if (elem.innerHTML == "Sötét mód"){

        elem.innerHTML = "Világos mód";
        btn.classList.replace("btn-outline-dark", "btn-outline-light");

        document.body.style.backgroundColor = "#1E2022";

        navbar.classList.replace("navbar-light", "navbar-dark");
        navlink.classList.replace("navbar-light", "navbar-dark");
        document.querySelector(".navbar").style.background = "linear-gradient(270deg, #626a75 0%, #333c47 100%)";

        rows.forEach(row => {row.style.background = "radial-gradient(circle, #626a75 0%, #333c47 100%)";});

        localStorage.setItem("btn", "Világos mód");
    }


    else {

        elem.innerHTML = "Sötét mód";
        btn.classList.replace("btn-outline-light", "btn-outline-dark");

        document.body.style.backgroundColor = "white";

        navbar.classList.replace("navbar-dark", "navbar-light");
        navlink.classList.replace("navbar-dark", "navbar-light");
        document.querySelector(".navbar").style.background = "linear-gradient(270deg, #bbe9cf 100%, #9ba49e 0%)";

        rows.forEach(row => {row.style.background = "radial-gradient(circle, #bbe9cf 100%, #9ba49e 0%)";});

        localStorage.setItem("btn", "Sötét mód");
    } 
}