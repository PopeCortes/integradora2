<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Download DC</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/adm.css" rel="stylesheet">

</head>

<!-- Modal Regisrar usuarios -->
<div class="modal fade" id="RegistrarModal" style=" background-color: rgba(0, 0, 0, 0.5) !important;" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="  color: #fff !important;">
      <div class="modal-header">
        <img id="imagen_modal" src="./assets/img/logo integradora.png" alt="">
        <!-- <h2 class="modal-title " id="exampleModalLabel" style="color: #000;">Download DC</h2> -->
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body modal_inicio" style="color: #fff;">
        <!-- Inicia Fomulario -->
        <form method="post">
          <h1>Registro</h1>
          <br>
          <label for="usuario">Cantante</label>
          <form method="post">
            <input class="text" type="text" name="cantante" placeholder="Cantante">
            <br><br>
            <label for="usuario">Direccion imagen</label>
            <input class="text" type="text" name="imagen" placeholder="Imagen">
            <br><br>
            <label for="usuario">Nombre cancion</label>
            <input class="text" type="text" name="ncancion" placeholder="N_cancion">
            <br><br>
            <label for="usuario">Direccion cancion</label>
            <input class="text" type="text" name="cancion" placeholder="Cancion">
            <br><br>

            <input type="submit" name="registrar" value="Registrar" class="btn btn-outline-success">

          </form>
          <?php
          include("registroc.php");
          ?>
          <br><br>

      </div>
      <div class="modal-footer modal_inicio">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
      </div>
      </form> <!-- Termina Forulario -->
    </div>
  </div>
</div> <!-- Cierra modal -->

<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid d-flex align-items-center justify-content-between">
    <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <i class="bi bi-music-note-list"></i>
      <h1>Download DC</h1>
    </a>

    <!-- Inicio de sesion -->
    <div class="header-social-links">
      <a style="margin: 0px" href="./inicio.php"><img width="40px" style="filter: invert(100%); margin: auto 20px;" src="./assets/img/left flecha.png" alt="" /></a>
    </div>
    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
  </div>
</header>
<header>
  <div class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a haref="#" class="navbar-brand"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarHeader">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="gallery-single.html" data-bs-toggle="modal" data-bs-target="#RegistrarModal" class="details-link">Agregar cantante</a> <!-- Button trigger modal -->
          </li>


        </ul>
      </div>
    </div>
</header>
<!-- End Header -->

<body>

  <div class="zona1">

    <?php
    $link = new PDO("mysql:host=localhost;dbname=integradora2", "root", "");
    ?>
    <p>Busqueda: </p>
    <form action="" method="get">
      <input type="text" name="busqueda">
      <input type="submit" name="enviar" value="Buscar">
    </form>
    <?php
    if (isset($_GET['enviar'])) {
      $busqueda = $_GET['busqueda'];

      $consulta = $conexion->query("SELECT imagen,cantante,cancion FROM musica WHERE cantante like '%$busqueda%' order by cantante");
    }
    ?>
    <table class="table table-striped">

      <thead>
        <tr>
          <th>Imagen</th>
          <th>Nombre</th>
          <th>N.cancion</th>
          <th>Musica</th>
        </tr>
        <thead>
          <?php foreach ($link->query("SELECT * FROM musica") as $row) { ?>
            <tr>
              <td><img src="<?php echo $row["imagen"] ?>" width="100" height="100"></td>
              <td><?php echo $row["cantante"] ?></td>
              <td><?php echo $row["ncancion"] ?></td>
              <td><audio controls>
                  <source src="<?php echo $row["cancion"] ?>" type="audio/mpeg">
                </audio></td>
            </tr>
          <?php } ?>
          <br> <br>

          <table class="table table-striped">

            <thead>
              <tr>
                <th>TOP</th>
                <th>Nombre</th>
              </tr>
            </thead>

            <?php foreach ($link->query("SELECT * FROM musica") as $row) { ?>
              <tr>
                <td><?php echo $row["id_cantante"] ?></td>
                <td><?php echo $row["cantante"] ?></td>
              </tr>
            <?php } ?>

  </div>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>