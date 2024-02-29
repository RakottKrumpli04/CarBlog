<div class="container">  
  <p class="fakeimg" style="height: 72px"></p>
    <div class="d-flex justify-content-end">
      <div class="col-md-2" id="elem">
        <select class="form-select" id="rendezes">
          <option disabled selected style="display:none;">Rendezés</option>
          <option value="marka">Márka szerint</option>
          <option value="fajta">Cikktípus szerint</option>
          </optgroup>
        </select>
      </div>
      <div class="col-md-2" id="elem">
        <select class="form-select" id="szures">
          <option disabled selected style="display:none;">Szűrés</option>
          <optgroup label="Márka szerint">
          <option value="Ford">Ford</option>
          <option value="AstonMartin">Aston Martin</option>
          <option value="Subaru">Subaru</option>
          </optgroup>
          <optgroup label="Cikktípus szerint">
          <option value="auto">Autóajánló</option>
          <option value="ismerteto">Cégismertető</option>
          <option value="tortenet">Autós történetek</option>
          </optgroup>
        </select>
      </div>
      <div class="col-md-1" id="elem">
        <button class="btn btn-outline-dark" id="btnSzuro" style="width: 100%">Alkalmaz</button>
      </div>
      <div class="col-md-1" id="elem">
        <div id="bin">
          <img class="torol" id="torles" src="svg/btorles.svg" alt="Törlés">
        </div>
      </div>
      </div>
    </div>
  <p class="fakeimg" style="height: 20px"></p>


  <script>
  var rendezes = 0;
  var szures = 0;
  document.getElementById("rendezes").addEventListener("change", function () {
    rendezes= this.value;
  });


  document.getElementById("szures").addEventListener("change", function () {
    szures = this.value;
  });


  document.getElementById("btnSzuro").addEventListener("click", function () {
    getData('../server/allito.php', stat);
    function stat (data){

        let elem = document.getElementById("cikkek");
        elem.parentNode.removeChild(elem);
        let cikkek = document.createElement("div");
        cikkek.id = "cikkek";
        let container = document.querySelector(".container");
        container.appendChild(cikkek);

        for(let obj of data){
            document.querySelector("#cikkek").innerHTML+=`
            <div class="fade-card" tabIndex="0">
                <div class="fade-card-front" style="background-image: url('${obj.kep}');">
                  <div class="leirashatter">
                    <h5 class="leiras">${obj.roviden}</h5>
                  </div>
                </div>

                <div class="fade-card-back" style="background-image: url('${obj.kep}');">
                  <div class="cimhatter">
                    <h1 class="cim">${obj.cim}</h1>
                  </div>
                </div>
              </div>
              <p class="fakeimg"></p>

            `            
        }
        const storedMode = localStorage.getItem("Mode");
        const cimhatter = document.querySelectorAll(".cimhatter");
        const leirashatter = document.querySelectorAll(".leirashatter");
        const fakeimg = document.querySelectorAll(".fakeimg");
        const cim = document.querySelectorAll(".cim");
        const leiras = document.querySelectorAll(".leiras");

        if(storedMode === "Dark"){

          cim.forEach(cim => {cim.style.color = "whitesmoke"});
          leiras.forEach(leiras => {leiras.style.color = "whitesmoke"});
          cimhatter.forEach(function(cimhatter) {cimhatter.style.backgroundColor = 'rgba(51, 60, 71, 0.85)';});
          leirashatter.forEach(function(leirashatter) {leirashatter.style.backgroundColor = 'rgba(51, 60, 71, 0.9)';});
          fakeimg.forEach(function(fakeimg) {fakeimg.style.backgroundColor = "#1E2022";});
        }
        else if(storedMode === "Dark"){

          cim.forEach(cim => {cim.style.color = "black"});
          leiras.forEach(leiras => {leiras.style.color = "black"});
          cimhatter.forEach(function(cimhatter) {cimhatter.style.backgroundColor = "rgba(197, 197, 175, 0.85)";});
          leirashatter.forEach(function(leirashatter) {leirashatter.style.backgroundColor = "rgba(197, 197, 175, 0.9)";});
          fakeimg.forEach(function(fakeimg) {fakeimg.style.backgroundColor = "rgb(236, 235, 225)";}); 
        }
  
    }
  });

  
    getData('../server/cikkek.php',stat);
    function stat (data){

      let cikkek = document.createElement("div");
      cikkek.id = "cikkek";
      let container = document.querySelector(".container");
      container.appendChild(cikkek);

        for(let obj of data){
            document.querySelector("#cikkek").innerHTML+=`
            <div class="fade-card" tabIndex="0">
                <div class="fade-card-front" style="background-image: url('${obj.kep}');">
                  <div class="leirashatter">
                    <h5 class="leiras">${obj.roviden}</h5>
                  </div>
                </div>

                <div class="fade-card-back" style="background-image: url('${obj.kep}');">
                  <div class="cimhatter">
                    <h1 class="cim">${obj.cim}</h1>
                  </div>
                </div>
              </div>
              <p class="fakeimg"></p>

            `            
        }
        const storedMode = localStorage.getItem("Mode");
        const cimhatter = document.querySelectorAll(".cimhatter");
        const leirashatter = document.querySelectorAll(".leirashatter");
        const fakeimg = document.querySelectorAll(".fakeimg");
        const cim = document.querySelectorAll(".cim");
        const leiras = document.querySelectorAll(".leiras");

        if(storedMode === "Dark"){

          cim.forEach(cim => {cim.style.color = "whitesmoke"});
          leiras.forEach(leiras => {leiras.style.color = "whitesmoke"});
          cimhatter.forEach(function(cimhatter) {cimhatter.style.backgroundColor = 'rgba(51, 60, 71, 0.85)';});
          leirashatter.forEach(function(leirashatter) {leirashatter.style.backgroundColor = 'rgba(51, 60, 71, 0.9)';});
          fakeimg.forEach(function(fakeimg) {fakeimg.style.backgroundColor = "#1E2022";});
        }
        else if(storedMode === "Dark"){

          cim.forEach(cim => {cim.style.color = "black"});
          leiras.forEach(leiras => {leiras.style.color = "black"});
          cimhatter.forEach(function(cimhatter) {cimhatter.style.backgroundColor = "rgba(197, 197, 175, 0.85)";});
          leirashatter.forEach(function(leirashatter) {leirashatter.style.backgroundColor = "rgba(197, 197, 175, 0.9)";});
          fakeimg.forEach(function(fakeimg) {fakeimg.style.backgroundColor = "rgb(236, 235, 225)";}); 
        }
    }
</script>

</div>
</body>
</html>
