<?php
require "inc.koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Profile.php</title>

  <style>
    header {
      background-color: grey;
    }

    footer {
      margin-top: 30px;
      text-align: center;
      background-color: grey;
      color: black;
      border-style: double;
      padding: 20px;
    }

    nav {
      background-color: grey;
      padding: 5px;
      top: 0;
      font-size: large;
      text-align: center;
      font-weight: 900;
      position: sticky;
      color: black;
      align-items: center;
      border-style: double;
    }
  </style>
</head>

<body>
  <header>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,900;1,300&display=swap" rel="stylesheet">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php?p=home">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                About Us
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="index.php?p=profile#profil">Profile</a></li>
                <li><a class="dropdown-item" href="index.php?p=profile#dentistprofile">Dentist</a></li>
                <li><a class="dropdown-item" href="index.php?p=profile#facilities">Facilities</a></li>
                <li><a class="dropdown-item" href="index.php?p=profile#contact">Contact Us</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php?p=treatment">Treatments</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php?p=partnership">Partnership</a></li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php?p=FAQ">FAQ</a></li>
          </ul>
          <a class="navbar-brand" href="index.php?p=login">Login/Register</a>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-light" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <?php
    $pages_dir = 'pages';
    if (!empty($_GET['p'])) {
      $pages = scandir($pages_dir, 0);
      unset($pages[0], $pages[1]);

      $p = $_GET['p'];
      if (in_array($p . '.php', $pages)) {
        include($pages_dir . '/' . $p . '.php');
      } else {
        echo 'Halaman tidak ditemukan! :(';
      }
    } else {
      include "./pages/home.php";
    }
    ?>
  </main>
  <footer>
      <h4 style="font-weight:800;">Copyright &copy; 2024</h4>
      <h5>Kelompok SSR</h5>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
