<?php 
		// Importo el archivo de la clase de conexion a la BD
		require 'controlador/controlador.php';
		// Crear al objeto de la clase BD_PDO
		$obj = new musica();
		// Linea que ejecuta la instruccion sql en la BD
		if (isset($_POST['btninsertar'])) 
		{
            $imagen = trim($_POST['imagen']);
            $cancion= trim($_POST['cancion']);
            $cantante = trim($_POST['cantante']);
            $ncancion = trim($_POST['ncancion']);
			if ($_POST['btninsertar']=='Insertar') 
			{
				$obj->Insertar($imagen,$cantante,$ncancion,$cancion);
			}
			elseif ($_POST['btninsertar']=='Modificar') 
			{
				$obj->Ejecutar_Instruccion("update musica set imagen='$imagen', cancion='$cancion',cantante='$cantante',ncancion='$ncancion' where id_cantante");
			}
			
		}
		
        elseif (isset($_GET['ideliminar'])) 
		{		
			$ideliminar = $_GET['ideliminar'];
			$obj->ideliminar($ideliminar);
		}
		elseif (isset($_GET['idmodificar'])) 
		{		
			$idmodificar = $_GET['idmodificar'];
			$buscar_mod = $obj->idmodificar($idmodificar);
		}

		if (isset($_POST['btnbuscar'])) 
		{
			$buscar = $_POST['txtbuscar'];
			$result = $obj->Buscar($buscar);
			$datos = $obj->Tabla_gen($result);
		}
		else
		{
			$result = $obj->Buscar_todo();
			$datos = $obj->Tabla_gen($result);
		}
	
		// LInea que muestra el contenido de la variable $result
		//var_dump($result);

		require 'vista/vistadm.php';
 	?>