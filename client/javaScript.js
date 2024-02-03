




function valt(){
    var elem = document.getElementById("btn");
    if (elem.innerHTML == "Sötét mód"){
        elem.innerHTML = "Világos mód";
        document.body.style.backgroundColor = 'black';
        document.body.style.color = 'white';
        localStorage.setItem("btn", "Világos mód");
    }
    else {
        elem.innerHTML = "Sötét mód";
        document.body.style.backgroundColor = 'white';
        document.body.style.color = 'black';
        localStorage.setItem("btn", "Sötét mód");
    } 
}