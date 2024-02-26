<div class="container">  
  <p class="fakeimg" style="height: 72px"></p>
    <div class="d-flex justify-content-end">
      <div class="col-md-2" id="elem">
        <select class="form-select" id="rendezes">
          <option disabled selected style="display:none;">Rendezés</option>
          <option value="1">Márka szerint</option>
          <option value="2">Cikktípus szerint</option>
          </optgroup>
        </select>
      </div>
      <div class="col-md-2" id="elem">
        <select class="form-select" id="szures">
          <option disabled selected style="display:none;">Szűrés</option>
          <optgroup label="Márka szerint">
          <option value="1">Ford</option>
          <option value="2">Aston Martin</option>
          <option value="3">Subaru</option>
          </optgroup>
          <optgroup label="Cikktípus szerint">
          <option value="1">Autóajánló</option>
          <option value="2">Cégismertető</option>
          <option value="3">Autós történetek</option>
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


  <div id="cikkek">

  </div>

  <script>
    getData('../server/cikkek.php',stat);
    function stat (data){
        console.log(data);
        for(let obj of data){
            document.querySelector("#cikkek").innerHTML+=`
            <div class="fade-card" tabIndex="0">
                <div class="fade-card-front" style="background-image: url('img/${obj.kep}');">
                  <div class="leirashatter">
                    <h5 class="leiras">${obj.roviden}</h5>
                  </div>
                </div>

                <div class="fade-card-back" style="background-image: url('img/${obj.kep}');">
                  <div class="cimhatter">
                    <h1 class="cim">${obj.cim}</h1>
                  </div>
                </div>
              </div>
              <p class="fakeimg"></p>

            `            
        }
    }
</script>
<p class="fakeimg" style="height: 100px"></p>
</div>
<script src="cikkekJS.js"></script>
</body>
</html>
