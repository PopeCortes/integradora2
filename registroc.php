<?php
include ("./DB/conex.php");

if(isset($_POST['registrar'])){
        $imagen = trim($_POST['imagen']);
        $cancion= trim($_POST['cancion']);
        $cantante = trim($_POST['cantante']);
        $consulta = "INSERT INTO musica(cantante,imagen,cancion) VALUES('$cantante','$imagen','$cancion')";
        $resultado = mysqli_query($conexion,$consulta);

}

?>