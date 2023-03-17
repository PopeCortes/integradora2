<?php
require './DB/conexion_bd.php';

$obj = new BD_PDO();

// Verificar si se ha enviado el formulario
if(isset($_POST["submit"])) {
  // Verificar si no hay errores en la carga del archivo
  if ($_FILES["archivo"]["error"] == UPLOAD_ERR_OK) {
    // Obtener información del archivo
    $nombreArchivo = $_FILES["archivo"]["name"];
    $tipoArchivo = $_FILES["archivo"]["type"];
    $tamanoArchivo = $_FILES["archivo"]["size"];
    $nombreTemporalArchivo = $_FILES["archivo"]["tmp_name"];

    // Mover el archivo a la carpeta de destino en el servidor
    $carpetaDestino = "archivos/";
    $rutaArchivo = $carpetaDestino . $nombreArchivo;
    move_uploaded_file($nombreTemporalArchivo, $rutaArchivo);

    // Guardar la ruta del archivo en la base de datos
    $conexion = new mysqli("localhost", "usuario", "contraseña", "basededatos");
    $sql = "INSERT INTO vistaadmin (imagen, ruta_archivo) VALUES ('$nombreArchivo', '$rutaArchivo')";
    $resultado = $conexion->query($sql);

    
    echo "El archivo de música se ha cargado correctamente.";
  } else {
    echo "Ha ocurrido un error al cargar el archivo de música.";
  }
}
?>




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
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/admin.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div
        class="container-fluid d-flex align-items-center justify-content-between"
      >
        <a
          href="index.html"
          class="logo d-flex align-items-center me-auto me-lg-0"
        >
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <i class="bi bi-music-note-list"></i>
          <h1>Download DC</h1>
        </a>

        <!-- Inicio de sesion -->
        <div class="header-social-links">
          <a style="margin: 0px" href="./index.html"
            ><img
              width="40px"
              style="filter: invert(100%); margin: auto 20px;"
              src="./assets/img/left flecha.png"
              alt=""
          /></a>
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
                            <a href="#" class="nav-link active">Listado Canciones</a>
                            </li>
                            <li class="nav-item">
                              <a href="#modal1">Agregar cantante</a>
                            </li>

                        </ul>
               </div>
              </div>
            </header>
    <!-- End Header -->
    <body>       
      <div>
        <id="modal1" class="modalmask">
          <div class="modalbox movedown">
            <a href="#close" title="close" class="close">X</a>
            <h2>Ventana modal</h2>
            <p>Esto es una ventana modal</p>
          </div>
              </div>
                <div class="zona1">
                    <p>Busqueda: 
                        <input type="text" name="nombre" id="nombre">
                        <input type="button" value="Buscar" id="buscar">
                        <br><br>
                        <nav class="menu">
                          <section class="menu_container">
                            <h1 class="menu_logo">

                            <form method="post" action="admin.php" enctype="multipart/form-data">
  <label for="archivo">Seleccionar archivo MP3:</label>
  <input type="file" name="archivo" id="archivo">
  <br>
  <input type="submit" name="submit" value="Cargar archivo">
</form>

                        <strong>Michelle</strong>  
                  <p>Dark room</p>
                    <audio controls>
                      <source src="assets/audio/michele/cancion1.mp3" type="audio/mpeg" >
                  </audio>
                  <br>
                  <p>Fell it<p>
                    <audio controls>
                      <source src="assets/audio/michele/cancion2.mp3" type="audio/mpeg" >
                    </audio>
                    <p>Hard for me<p>
                    <audio controls>
                      <source src="assets/audio/michele/cancion3.mp3" type="audio/mpeg" >
                    </audio>
                    <p>Watch me burn<p>
                    <audio controls>
                      <source src="assets/audio/michele/cancion4.mp3" type="audio/mpeg" >
                    </audio>
                    </p>
                    
                </div>

                <div class="zona3">
                    <p>TOP</p>
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
