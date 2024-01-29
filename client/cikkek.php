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
    <a class="navbar-brand" href="#">Automotive News</a>
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
  <p class="fakeimg"></p>
  <div class="col-md" id="postcolumn">
      <div class="row">
        <h2>Cím</h2>
        <h5>Cím leírás</h5>
        <img class="img" src="img/Gemera.png" alt="Kép" style="width: 60%;">
        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      </div>
      <div class="row">
        <h2>Cím</h2>
        <h5>Cím leírás</h5>
        <img class="img" src="img/Gemera.png" alt="Kép" style="width: 50%;">
        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      </div>
      <div class="row">
        <h2>Cím</h2>
        <h5>Cím leírás</h5>
        <img class="img" src="img/Gemera.png" alt="Kép" style="width: 40%;">
        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      </div>
    </div>
</div>


<div class="footercolumn">
  <h2 id="sor">Rólam</h2>
  <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
</div>
</body>
</html>
