<?php
include ("./DB/conex.php");

if(isset($_POST['registrar'])){
        $imagen = trim($_POST['imagen']);
        $cancion= trim($_POST['cancion']);
        $cantante = trim($_POST['cantante']);
        $ncancion = trim($_POST['ncancion']);
        $consulta = "INSERT INTO musica(imagen,cantante,ncancion,cancion) VALUES('$imagen','$cantante','$ncancion','$cancion')";
        $resultado = mysqli_query($conexion,$consulta);

}

?>