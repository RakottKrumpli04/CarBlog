<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <title>Automotive News</title>
    <link rel="stylesheet" href="style.css">    
  </head>

<body>
  <nav class="navbar fixed-top navbar-expand-sm navbar-light" id="navbar">
    <a class="navbar-brand m-2">Automotive News</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item m-2">
              <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item m-2">
              <a class="nav-link active" id="active" href="cikkek.php">Bejegyzések</a>
          </li>
          <li class="nav-item m-2">
              <a class="nav-link" href="#">C</a>
          </li>
        </ul>
    </div>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
          <li class="nav-item m-2">
              <button class="btn btn-outline-dark" id="btn">Sötét mód</button>
          </li>
        </ul>
    </div>
  </nav>

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
      <div class="col-md-29" id="elem">
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


  <div class="fade-card" tabIndex="0">
      <div class="fade-card-front">
          <div class="leirashatter">
            <h5 class="leiras">Cím leírás</h1>
          </div>
      </div>

      <div class="fade-card-back">
          <div class="cimhatter">
            <h1 class="cim">Cím</h5>
          </div>
      </div>
  </div>




  <p class="fakeimg" style="height: 100px"></p>
</div>

<div class="footercolumn">
  <h3 id="sor">Rólam</h2>
  <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
</div>

<script src="cikkekJS.js"></script>
</body>
</html>
