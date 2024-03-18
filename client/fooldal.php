<div class="container">
    <h1 class="fooldal"><span style="background-color: red; color: white;">A</span>utó<span style="background-color: red; color: white;">M</span>ánia</h1>
    <p class="bevezeto">Üdvözöllek az autós blog oldalamon! Itt mindent megtalálsz, ami az autózással kapcsolatos: legfrissebb autómodellek bemutatása, autós történetek és még sok más. Célom, hogy segítsek az olvasóknak jobban megérteni az autókat és azokkal kapcsolatos legújabb fejlesztéseket. Fedezd fel az autóipar legújabb trendjeit, és légy mindig naprakész az autózással kapcsolatos információkkal! Legyen szó technológiai újításokról, biztonsági kérdésekről vagy egyszerűen csak autós élményekről, itt minden autós rajongó otthonra lelhet!</p>
</div>
<p class="adstart">Cikkajánló</p>
<div class="row">
        <script>
            getData('../server/fooldal.php',stat);
            function stat (data){
                
                for(let obj of data){
                    document.querySelector(".row").innerHTML+=`
                    <a href="index.php?prog=cikkoldal.php&id=${obj.id}" class="col-md" onclick="oldal()">
                      <div class="fade-card-main" tabIndex="0">
                          <div class="fade-card-front" style="background-image: url('${obj.borito}');">
                            <div class="leirashatter">
                              <h5 class="leiras">${obj.roviden}</h5>
                            </div>
                          </div>
                
                          <div class="fade-card-back" style="background-image: url('${obj.borito}');">
                            <div class="cimhatter">
                              <h1 class="cim">${obj.cim}</h1>
                            </div>
                          </div>
                        </div>
                        </a>
                
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
                else if(storedMode === "Light"){
                
                  cim.forEach(cim => {cim.style.color = "black"});
                  leiras.forEach(leiras => {leiras.style.color = "black"});
                  cimhatter.forEach(function(cimhatter) {cimhatter.style.backgroundColor = "rgba(197, 197, 175, 0.85)";});
                  leirashatter.forEach(function(leirashatter) {leirashatter.style.backgroundColor = "rgba(197, 197, 175, 0.9)";});
                  fakeimg.forEach(function(fakeimg) {fakeimg.style.backgroundColor = "rgb(236, 235, 225)";}); 
                }
            
            }
        </script>
</div>
<p class="adend"></p>
<div class="footercolumn">
    <h4 id="sor">Rólam</h4>
    <p>asd</p>
</div> 