<?php
require "./DB/conexion_bd.php";
$obj=new BD_PDO();
$MOSTRAR_DATOS = $obj->Ejecutar_Instruccion("SELECT * FROM musica")


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/inicio.css">

    <title>huervo</title>
</head>

<body>

    <!-- Container izquierdo -->
    <div id="contenedor">
        <div id="cabecera"></div>
        <div id="menu"></div>
        <div id="izquierda">
            <h2> Top artistas </h2>
         
            <button id="next" class="dropdown-btn">Shakira</button>
        <div class="dropdown-content">
            <!-- musica con descarga -->
            <p> BIZZARAP</p>
            <audio controls><source src="./audio/1.mp3" type="audio/mpeg"></audio>
         <a href="./audio/1.mp3" download><img width="60px" src="./img/descargar.png"alt=""></a>
         <p> Shakira - TQG</p>
            <audio controls><source src="./audio/Karol_G_ft_Shakira_TQG.mp3" type="audio/mpeg"></audio>
         <a href="./audio/Karol_G_ft_Shakira_TQG.mp3" download><img width="60px" src="./img/descargar.png"alt=""></a>
        </div>

   
        <!-- <br> -->
<!-- termina -->
        <br>
        <br>
        <!-- inicia otra cancion -->
        <button id="next" class="dropdown-btn">Anuel AA</button>
        <div class="dropdown-content ">
            <!-- musica con descarga -->
            <p> Anuel aa - Monstruo</p>
            <audio controls><source src="./audio/Anuel_monstruo.mp3" type="audio/mpeg"></audio>
         <a href="./audio/Anuel_monstruo.mp3" download><img width="60px" src="./img/descargar.png"alt=""></a>
        </div>
    <br><br>

                    <button id="next" class="dropdown-btn">Bad Bunny</button>
        <div class="dropdown-content">
            <!-- musica con descarga -->
            <p>Bad Bunny - Un coco</p>
            <audio controls><source src="./audio/Bad_Bunny_Un Coco.mp3" type="audio/mpeg"></audio>
         <a href="./audio/Bad_Bunny_Un Coco.mp3" download><img width="60px" src="./img/descargar.png"alt=""></a>
        </div>
<br><br>
        <button id="next" class="dropdown-btn">Natanael Cano</button>
        <div class="dropdown-content">
            <!-- musica con descarga -->
            <p>Natanael Cano - Arriba</p>
            <audio controls><source src="./audio/Natanael_Cano_Arriba.mp3" type="audio/mpeg"></audio>
         <a href="./audio/Natanael_Cano_Arriba.mp3" download><img width="60px" src="./img/descargar.png"alt=""></a>
        </div>


        <!-- container derecho -->
    </div>
    <div id="derecha">
        <?php foreach($MOSTRAR_DATOS as $dts){?>
        <h2> <?php echo $dts[2] ?> </h2>
        <audio controls>
            <source src="<?php echo $dts[3] ?>" type="audio/mpeg">
        </audio>
        <!-- <br> -->
        <a href="<?php echo $dts[3] ?>" download><img width="50px" src="https://cdn-icons-png.flaticon.com/128/7566/7566356.png"alt=""></a>
<?php
        }
?>    

</div>




    <style>



        .dropdown-btn {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            background-color: red;
            color: #fff;
            padding: 12px;
        }
    </style>

<!-- Scrip para el boton de cada artista -->
<script src="./js/jq.js" ></script>
<script src="./js/main.js"></script>

</body>

</html>
