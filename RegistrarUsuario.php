<!-- Registrar Usuarios -->
<?php
require './DB/conexion_bd.php';

$obj = new BD_PDO();

if (isset($_POST['btnregistrar'])) {

    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $DatosRegistro = $obj->Ejecutar_Instruccion
    ("INSERT INTO registrousuario (Usuario, Correo , Password) VALUES ('$usuario','$correo','$password') ");

    echo "<script></script>";
    header("Location: inicio.php");
} else {
    // echo " <script>alert('Binevenido' )</script>";
}
?>


<!-- Inicio de sesion -->
<?php

if (isset($_POST['btniniciarsesion'])) {

    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $datos = $obj->Ejecutar_Instruccion("SELECT * FROM registrousuario where Correo='$correo' and Password='$password'");

    if (@$datos[0][0] > 0) {
        echo "<script>alert('Bienvenido');</script>";
        $_SESSION['id_Registrar'] = $datos[0][0];
        $_SESSION['correo'] = $datos[0][2];
        // $_SESSION['password'] = $datos[0][3];
        $_SESSION['Privilegio'] = $datos[0][4];
        header("location:inicio.php");
    } else {
        echo "<script>alert('Error')</script>";
    }
}



$datos_imagenes = $obj->Ejecutar_Instruccion("SELECT * FROM musica");

?>



<!-- else {
echo "<script>Swal.fire({icon: 'success',  title: 'Your work has been saved',  showConfirmButton: false,  timer: 1500})</script>";
} -->

<!-- <script>Swal.fire({icon: 'success',  title: 'Your work has been saved',  showConfirmButton: false,  timer: 1500})</script> -->



<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>