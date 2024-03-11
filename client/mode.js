document.addEventListener("DOMContentLoaded", function () {

    var screenWidth = window.innerWidth;
    if (screenWidth <= 575) {
        navbar.classList.remove('fixed-top');
        document.getElementById('ures').style.display = 'none';

    }
    if (screenWidth > 575) {
        navbar.classList.add('fixed-top');
        document.getElementById('ures').style.display = 'block';
    }



    const storedMode = localStorage.getItem("Mode");
    if (performance.navigation.type == 1) {
        localStorage.clear(); 
        localStorage.setItem("Page", "Home");
        localStorage.setItem("Mode", "Light");
        window.location.href = "index.php";
    }
    if (storedMode == "Dark") {
        mode();
    }

});
function home(){
    localStorage.setItem("Page", "Home");

}
function cikk(){
    localStorage.setItem("Page", "Cikk");

}


document.getElementById("btn").addEventListener("click", function () {

    const storedValue = localStorage.getItem("Mode");
    if(storedValue == "Dark"){
        localStorage.setItem("Mode", "Light");
        mode();
    }

    else if(storedValue == "Light"){
        localStorage.setItem("Mode", "Dark");
        mode();
    }
});
window.addEventListener('resize', function() {

    var screenWidth = window.innerWidth;

    if (screenWidth <= 575) {
        navbar.classList.remove('fixed-top');
        document.getElementById('ures').style.display = 'none';

    }
    if (screenWidth > 575) {
        navbar.classList.add('fixed-top');
        document.getElementById('ures').style.display = 'block';
    }
});



function mode(){
    const storedPage = localStorage.getItem("Page");


    if(storedPage === "Home"){


            const elem = document.getElementById("btn");
            const storedValue = localStorage.getItem("Mode");
            const navbar = document.querySelector(".navbar");
            const navlink = document.querySelector(".nav-link");
        
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

        } 
    }


    if(storedPage === "Oldal"){ 

            const elem = document.getElementById("btn");
            const storedValue = localStorage.getItem("Mode");
            const navbar = document.querySelector(".navbar");
            const navlink = document.querySelector(".nav-link");
            const fakeimg = document.querySelectorAll(".fakeimg");
            const cikkelem = document.querySelectorAll(".cikkelem");


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
            cikkelem.forEach(function(cikkelem) {cikkelem.style.color = "whitesmoke";});




        
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
            cikkelem.forEach(function(cikkelem) {cikkelem.style.color = "black";});



        } 
}


        if(storedPage === "Cikk"){


            const elem = document.getElementById("btn");
            const btnSzuro = document.getElementById("btnSzuro");
            const storedValue = localStorage.getItem("Mode");
            const navbar = document.querySelector(".navbar");
            const navlink = document.querySelector(".nav-link");
            const selectek = document.querySelectorAll(".form-select");
            const fakeimg = document.querySelectorAll(".fakeimg");
            const cimhatter = document.querySelectorAll(".cimhatter");
            const leirashatter = document.querySelectorAll(".leirashatter");
            const cim = document.querySelectorAll(".cim");
            const leiras = document.querySelectorAll(".leiras");
        
        
            if (storedValue === "Dark"){
            
                elem.innerHTML = "Világos mód";
                elem.classList.replace("btn-outline-dark", "btn-outline-light");
                btnSzuro.classList.replace("btn-outline-dark", "btn-outline-light");
                document.querySelector("#btn").style.backgroundColor = "#333c47";
                document.querySelector("#btnSzuro").style.backgroundColor = "#333c47";
                selectek.forEach(select => {select.style.color = "whitesmoke"});
                selectek.forEach(select => {select.style.backgroundColor = "#333c47"});
                selectek.forEach(select => {select.style.borderColor = "whitesmoke"});
            
                document.body.style.backgroundColor = "#1E2022";
            
                navbar.classList.replace("navbar-light", "navbar-dark");
                navlink.classList.replace("navbar-light", "navbar-dark");
                document.querySelector(".navbar").style.background = "linear-gradient(270deg, #626a75 0%, #333c47 100%)";
            
                document.querySelector(".footercolumn").style.background = "linear-gradient(270deg, #626a75 0%, #333c47 100%)";
                document.querySelector(".footercolumn").style.color = "whitesmoke";
                document.getElementById("sor").style.borderColor = "whitesmoke";

                cim.forEach(cim => {cim.style.color = "whitesmoke"});
                leiras.forEach(leiras => {leiras.style.color = "whitesmoke"});
                cimhatter.forEach(function(cimhatter) {cimhatter.style.backgroundColor = 'rgba(51, 60, 71, 0.85)';});
                leirashatter.forEach(function(leirashatter) {leirashatter.style.backgroundColor = 'rgba(51, 60, 71, 0.9)';});
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
            
                document.body.style.backgroundColor = "rgb(236, 235, 225)";
            
                navbar.classList.replace("navbar-dark", "navbar-light");
                navlink.classList.replace("navbar-dark", "navbar-light");
                document.querySelector(".navbar").style.background = "linear-gradient(270deg, rgb(230, 230, 206) 0%, rgb(165, 165, 150) 100%)";

                document.querySelector(".footercolumn").style.background = "linear-gradient(270deg, rgb(230, 230, 206) 0%, rgb(165, 165, 150) 100%)";
                document.querySelector(".footercolumn").style.color = "black";
                document.getElementById("sor").style.borderColor = "black";

                cim.forEach(cim => {cim.style.color = "black"});
                leiras.forEach(leiras => {leiras.style.color = "black"});
                cimhatter.forEach(function(cimhatter) {cimhatter.style.backgroundColor = "rgba(197, 197, 175, 0.85)";});
                leirashatter.forEach(function(leirashatter) {leirashatter.style.backgroundColor = "rgba(197, 197, 175, 0.9)";});
                fakeimg.forEach(function(fakeimg) {fakeimg.style.backgroundColor = "rgb(236, 235, 225)";}); 
            } 
    }   
}

