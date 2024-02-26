function homeValt(){
    
    const elem = document.getElementById("btn");
    const storedValue = localStorage.getItem("Mode");
    const navbar = document.querySelector(".navbar");
    const navlink = document.querySelector(".nav-link");
    const fakeimg = document.querySelectorAll(".fakeimg");

if (storedValue === "Dark"){

    elem.innerHTML = "Világos mód";
    elem.classList.replace("btn-outline-dark", "btn-outline-light");
    document.querySelector("#btn").style.backgroundColor = "#333c47";

    document.body.style.backgroundColor = "#1E2022";

    navbar.classList.replace("navbar-light", "navbar-dark");
    navlink.classList.replace("navbar-light", "navbar-dark");
    document.querySelector(".navbar").style.background = "linear-gradient(270deg, #626a75 0%, #333c47 100%)";

    document.querySelector(".footercolumn").style.background = "linear-gradient(270deg, #626a75 0%, #333c47 100%)";
    document.querySelector(".footercolumn").style.color = "whitesmoke";
    document.getElementById("sor").style.borderColor = "whitesmoke";
    fakeimg.forEach(function(fakeimg) {fakeimg.style.backgroundColor = "#1E2022";});

}

else if (storedValue === "Light"){

    elem.innerHTML = "Sötét mód";
    elem.classList.replace("btn-outline-light", "btn-outline-dark");
    document.querySelector("#btn").style.backgroundColor = "rgb(197, 197, 175)";

    document.body.style.backgroundColor = "rgb(236, 235, 225)";

    navbar.classList.replace("navbar-dark", "navbar-light");
    navlink.classList.replace("navbar-dark", "navbar-light");
    document.querySelector(".navbar").style.background = "linear-gradient(270deg, rgb(230, 230, 206) 0%, rgb(165, 165, 150) 100%)";

    document.querySelector(".footercolumn").style.background = "linear-gradient(270deg, rgb(230, 230, 206) 0%, rgb(165, 165, 150) 100%)";
    document.querySelector(".footercolumn").style.color = "black";
    document.getElementById("sor").style.borderColor = "black";
    fakeimg.forEach(function(fakeimg) {fakeimg.style.backgroundColor = "rgb(236, 235, 225)";}); 
} 
}