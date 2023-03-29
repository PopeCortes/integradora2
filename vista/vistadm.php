<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Download DC</title>
	<meta content="" name="description" />
	<meta content="" name="keywords" />

	<!--Vendor CSS FILES -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/css/inadm.css" rel="stylesheet">

<script>
	
	function eliminar(id)
	{
		if(confirm("¿ Estas seguro de eliminar el registro ?"))
		{
			window.location = "indexadm.php?ideliminar=" + id;
		}
	}

	function modificar(id)
	{
		window.location = "indexadm.php?idmodificar=" + id;
	}
</script>
</head>
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
        <a href="gallery-single.html" data-bs-toggle="modal" data-bs-target="#RegistrarModal" class="details-link">Agregar cantante</a>        <!-- Button trigger modal -->
          <a style="margin: 0px" href="./index.php"
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
		<form action="indexadm.php" id="frminsertar" name="frminsertar" method="post">
		
		<br>
		<label for="">Cantante: </label>
		<input type="text" id="txtnombre" name="cantante" value="<?php echo @$buscar_mod[0][1]; ?>" style="width: 50%;
		border: none; outline: none; background: #e6e6fa; border-bottom: 3px solid">
		<br>
		<br>
		<label for="">Direccion imagen: </label>
		<form action="/upload" method="post" enctype="multipart/form-data">
			<input type="file" name="FileToUpload" id="FileToUpload">
		</form>
		<br>
		<br>
		<label for="">Nombre cancion: </label>
		<input type="text" id="txtfecha" name="ncancion" value="<?php echo @$buscar_mod[0][3]; ?>" style="width: 50%;
		border: none; outline: none; background: #e6e6fa; border-bottom: 3px solid">
		<br>
		<br>
		<label for="">Direccion cancion: </label>
		<form action="/upload" method="post" enctype="multipart/form-data">
			<input type="file" name="FileToUpload" id="FileToUpload">
		<br>
		<br>
		<input class="insertar" type="submit" id="btninsertar" name="btninsertar" value="<?php if(isset($_GET['idmodificar']))
		{ 
			echo 'Modificar';
		}
		else
		{
			echo 'Insertar';
		}
		 ?>">
		 </center>
	</form>
	</div>
        <div class="modal-footer modal_inicio">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </form>      <!-- Termina Forulario -->
    </div>
  </div>
</div> <!-- Cierra modal -->


<body>	
<div class="zona1">
	<form action="indexadm.php" id="frmbuscar" name="frmbuscar" method="post">
		<label for="">Buscar: </label>
		<input class="busqueda" type="text" id="txtbuscar" name="txtbuscar" style="width: 11%;
		border: none; outline: none; background: #e6e6fa; border-bottom: 1px solid">
		<input class="buscar"type="submit" id="btnbuscar" name="btnbuscar" value="Buscar" >
		<br><br>
		<table class= "table table-striped">
			<tr>
				<td align="center"  height="50" width="150" style="color:#fff" >Imagen</td>
				<td align="center" height="50" width="150"  style="color:#fff">Cantante</td>
				<td align="center" height="50" width="150"  style="color:#fff">Nombre cancion</td>
				<td align="center" height="50" width="150"  style="color:#fff">Cancion</td>

				<td style="color:#fff" style="border-right: 1px solid;" colspan="2" align="center" >Accion</td>
			</tr>
			<?php echo $datos; ?>
		</table>
	</form>
	</center>
	</div>
	<div id="preloader">
      <div class="line"></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
	
</body>
</html>