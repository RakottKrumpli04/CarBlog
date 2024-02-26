<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <title>Automotive News</title>
    <link rel="stylesheet" href="style.css">
    <script src="getData.js"></script>
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
            <a class="nav-link" href="index.php?prog=cikkek.php" onclick="valaszt()">Bejegyzések</a>
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
  <?php
    if(isset($_GET['prog'])) 
      include $_GET['prog'];
    else 
      include 'fooldal.php';
    ?>
</div>















<div class="footercolumn">
    <h3 id="sor">Rólam</h2>
    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
  </div>    
<script src="indexJS.js"></script>
<script src="cikkekJS.js"></script>
</body>
</html>
