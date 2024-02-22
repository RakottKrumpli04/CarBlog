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
    <a class="navbar-brand m-2" href="#">Automotive News</a>
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
  <p class="fakeimg" style="height: 100px"></p>
    <div class="row">
      <div class="col-md">
        <h3>Szűrő</h3>
      </div>
      <div class="col-md-2">
        <select id="select">
          <option disabled selected style="display:none;">Choose an option</option>
          <option value="1">Onsdflksddovinidfbpfve</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
      <div class="col-md-2">
      <button class="btn btn-outline-dark" id="btnSzuro">Szűrők törlése</button>
      </div>
    </div>
  <p class="fakeimg" style="height: 20px"></p>


  <div class="flip-card" tabIndex="0">
    <div class="flip-card-inner">

      <div class="flip-card-front">
        <div class="leirashatter">
          <h5 class="leiras">Cím leírás</h1>
        </div>
      </div>

      <div class="flip-card-back">
        <div class="cimhatter">
            <h1 class="cim">Cím</h5>
        </div>
      </div>
    </div>
  </div>




  <p class="fakeimg" style="height: 100px"></p>
</div>

<div class="footercolumn">
  <h3 id="sor">Rólam</h2>
  <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
</div>
<script src="javaScript.js"></script>
</body>
</html>
