<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Download Music</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="./assets/img/icon.png" type="image/x-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- =======================================================
  * Template Name: PhotoFolio - v1.2.0
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- php -->
  <?php
  require './RegistrarUsuario.php';
  ?>


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
          <form action="index.php" method="post"> <!-- Inicia Fomulario -->
            <h1>Registro</h1>
            <br>
            <label for="usuario">Usuario</label>
            <input class="TextoInicioSesion" type="text" name="usuario" id="usuario" placeholder="Usuario"><br><br>

            <label for="correo">Correo</label>
            <input class="TextoInicioSesion" type="text" name="correo" id="correo" placeholder="Correo"><br><br>

            <label for="password">Password</label>
            <input class="TextoInicioSesion" type="text" name="password" id="password" placeholder="Password">

        </div>
        <div class="modal-footer modal_inicio">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
          <input type="submit" name="btnregistrar" value="Registrarse" class="btn btn-outline-success">
        </div>
        </form> <!-- Termina Forulario -->
      </div>
    </div>
  </div> <!-- Cierra modal -->


  <!-- Modal Inicio de sesion -->
  <div class="modal fade" id="exampleModal" style=" background-color: rgba(0, 0, 0, 0.5) !important;" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="  color: #fff !important;">
        <div class="modal-header">
          <img id="imagen_modal" src="./assets/img/logo integradora.png" alt="">
          <!-- <h2 class="modal-title " id="exampleModalLabel" style="color: #000;">Download DC</h2> -->
          <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
        </div>
        <div class="modal-body modal_inicio" style="color: #fff;">
          <form action="index.php" method="post"> <!-- Inicio Sesion Formulario -->
            <h1>Inicio de sesion</h1>
            <label for="correo">Correo</label>
            <input class="TextoInicioSesion" type="text" name="correo" id="correo" placeholder="Correo"><br><br>

            <label for="password">Password</label>
            <input class="TextoInicioSesion" type="text" name="password" id="password" placeholder="Password">
            <br>
            <br>
            <p>¿No estas registrado?
              <a href="gallery-single.html" data-bs-toggle="modal" data-bs-target="#RegistrarModal" class="details-link">Registrate</a>
            </p>
            <div class="modal-footer modal_inicio">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <input type="submit" name="btniniciarsesion" value="Iniciar sesion" class="btn btn-primary">

            </div>
          </form> <!-- Termina Formulario -->
        </div>
      </div>
    </div>
  </div> <!-- Cierra modal -->

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <i class="bi bi-music-note-list"></i>
        <h1>Download Music</h1>
      </a>

      
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="gallery-single.html" data-bs-toggle="modal" data-bs-target="#exampleModal" class="details-link">Inicio de sesion</a></li>
          <li><a href="gallery-single.html" data-bs-toggle="modal" data-bs-target="#RegistrarModal" class="details-link">Registrar</a></li>
        </ul>

                  <!--  Inicio de sesion -->
           <!-- Button trigger modal -->
           <!-- Button trigger modal -->
      </nav>
        



      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2> Bienvenidos a <span>Download Music</span> </h2>
          <p>Escucha y descarga música, con las mejores canciones y con la mejor calidad</p>
          <a href="#gallery" class="btn-get-started">Descargar Música</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">
        <div class="row gy-4 justify-content-center">

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://lastfm.freetls.fastly.net/i/u/ar0/4fa9ebc9923e45f58d5783aa2b8c8ce4.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <!-- <a href="assets/img/gallery/gallery-1.jpg" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a> -->
                <a href="gallery-single.html" data-bs-toggle="modal" data-bs-target="#exampleModal" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://www.nacion.com/resizer/DXLFoajVzlK2TzC14Hrj-8qnN1k=/1440x0/filters:format(jpg):quality(70)/cloudfront-us-east-1.images.arcpublishing.com/gruponacion/2DWIW7PA3FD6JO2MHYPM4LNF64.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <!-- <a href="assets/img/gallery/gallery-2.jpg" title="Gallery 2" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a> -->
                <a href="gallery-single.html" data-bs-toggle="modal" data-bs-target="#exampleModal" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://is1-ssl.mzstatic.com/image/thumb/Podcasts125/v4/0f/88/3e/0f883e2d-904e-03ca-ada9-0d89ea10ec17/mza_15458582479149804182.jpg/1200x1200bb.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <!-- <a href="assets/img/gallery/gallery-7.jpg" title="Gallery 7" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a> -->
                <a href="gallery-single.html" data-bs-toggle="modal" data-bs-target="#exampleModal" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->


          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://www.billboard.com/wp-content/uploads/2022/10/shakira-credit-jaume-del-laiguana-2022-billboard-1-1548.jpg?w=942&h=623&crop=1" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <!-- <a href="assets/img/gallery/gallery-4.jpg" title="Gallery 4" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a> -->
                <a href="gallery-single.html" data-bs-toggle="modal" data-bs-target="#exampleModal" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://yt3.googleusercontent.com/7tCfeCWH4arhsTM-4Rz4IxWieQbegzibeXlG-kbytAujdk5dr2K0gBb8NG0Cvk6lB1dPkjyd=s900-c-k-c0x00ffffff-no-rj" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <!-- <a href="assets/img/gallery/gallery-5.jpg" title="Gallery 5" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a> -->
                <a href="gallery-single.html" data-bs-toggle="modal" data-bs-target="#exampleModal" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://cdn5.beatstars.com/eyJidWNrZXQiOiJidHMtY29udGVudCIsImtleSI6InVzZXJzL3Byb2QvMTU1ODIyNy9pbWFnZS9YeEdySFc0U1BocjcvOGNhY2Y3YWY1MzkzZjczMzkxZWE0ZGYxOC5qcGciLCJ0aW1lc3RhbXAiOm51bGwsImVkaXRzIjp7InJlc2l6ZSI6eyJmaXQiOm51bGwsIndpZHRoIjo3MDAsImhlaWdodCI6NzAwfX19?t=1636098418049" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <!-- <a href="assets/img/gallery/gallery-6.jpg" title="Gallery 6" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a> -->
                <a href="gallery-single.html" data-bs-toggle="modal" data-bs-target="#exampleModal" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://i.scdn.co/image/ab67616d0000b273073bc2070f7fa02b2a6bda64" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <!-- <a href="assets/img/gallery/gallery-3.jpg" title="Gallery 3" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a> -->
                <a href="gallery-single.html" data-bs-toggle="modal" data-bs-target="#exampleModal" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://heraldodemexico.com.mx/u/fotografias/m/2022/1/20/f1280x720-468458_600133_5050.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <!-- <a href="assets/img/gallery/gallery-8.jpg" title="Gallery 8" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a> -->
                <a href="gallery-single.html" data-bs-toggle="modal" data-bs-target="#exampleModal" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://media.ticketmaster.com/tm/en-us/dam/a/875/9b0eaf89-2107-42fc-bed9-4f4c1b273875_1770931_CUSTOM.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <!-- <a href="assets/img/gallery/gallery-9.jpg" title="Gallery 9" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a> -->
                <a href="gallery-single.html" data-bs-toggle="modal" data-bs-target="#exampleModal" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://is5-ssl.mzstatic.com/image/thumb/Music112/v4/29/74/c5/2974c54a-b3a6-827b-a09f-843861d86e19/1963621034115_cover.jpg/1200x1200bf-60.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <!-- <a href="assets/img/gallery/gallery-10.jpg" title="Gallery 10" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a> -->
                <a href="gallery-single.html" data-bs-toggle="modal" data-bs-target="#exampleModal" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://resources.claroshop.com/medios-plazavip/fotos/productos_sears1/original/2451142.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <!-- <a href="assets/img/gallery/gallery-11.jpg" title="Gallery 11" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a> -->
                <a href="gallery-single.html" data-bs-toggle="modal" data-bs-target="#exampleModal" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://www.debate.com.mx/__export/1431807293950/sites/debate/img/show/2015/05/16/chalinosanchez.jpg_423682103.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <!-- <a href="assets/img/gallery/gallery-12.jpg" title="Gallery 12" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a> -->
                <a href="gallery-single.html" data-bs-toggle="modal" data-bs-target="#exampleModal" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://is1-ssl.mzstatic.com/image/thumb/Music128/v4/01/d8/1b/01d81b1b-664a-3f97-bda0-23668a96ef18/192562905166.jpg/1200x1200bf-60.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <!-- <a href="assets/img/gallery/gallery-13.jpg" title="Gallery 13" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a> -->
                <a href="gallery-single.html" data-bs-toggle="modal" data-bs-target="#exampleModal" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://www.debate.com.mx/__export/1664948909185/sites/debate/img/2022/10/04/peso_pluma_en_el_ocho_fest_musci.jpg_423682103.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <!-- <a href="assets/img/gallery/gallery-14.jpg" title="Gallery 14" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a> -->
                <a href="gallery-single.html" data-bs-toggle="modal" data-bs-target="#exampleModal" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://is5-ssl.mzstatic.com/image/thumb/Music128/v4/e1/a2/0b/e1a20b45-388e-e4d2-201f-6de0ea65ad64/00808835434829.rgb.jpg/1200x1200bf-60.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <!-- <a href="assets/img/gallery/gallery-15.jpg" title="Gallery 15" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a> -->
                <a href="gallery-single.html" data-bs-toggle="modal" data-bs-target="#exampleModal" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://is5-ssl.mzstatic.com/image/thumb/Music124/v4/d3/89/a3/d389a312-de54-5d94-6d6b-ab50dc3daf3d/00801472113027.rgb.jpg/1200x1200bf-60.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <!-- <a href="assets/img/gallery/gallery-16.jpg" title="Gallery 16" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a> -->
                <a href="gallery-single.html" data-bs-toggle="modal" data-bs-target="#exampleModal" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->

        </div>

      </div>
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        <strong><span>Download DC</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/ -->
        Designed by <a href="#">Diego Eduardo Cortés Méndez</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Validaciones  -->
  <script src="./assets/js/validation.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>