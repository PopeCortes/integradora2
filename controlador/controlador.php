<?php

require 'DB/conexion_bd.php';

class musica extends BD_PDO
{
	function Insertar($imagen, $cantante,$ncancion,$cancion)
	{
		$this->Ejecutar_Instruccion("Insert into musica(imagen,cantante,ncancion,cancion) values('$imagen','$cantante','$ncancion','$cancion')");
	}

	function Buscar($buscar)
	{
		$result = $this->Ejecutar_Instruccion("Select * from musica where cantante like '%$buscar%'");
		return $result;
	}

	function Buscar_todo()
	{
		$result = $this->Ejecutar_Instruccion("Select * from musica");
		return $result;
	}

    function ideliminar($ideliminar)
    {
		$this -> Ejecutar_Instruccion("Delete from musica where id_cantante = '$ideliminar'");
	}

	function idmodificar($idmodificar)
    {
		$result= $this->Ejecutar_Instruccion("Select * from musica where id_cantante = '$idmodificar'");
		return $result;
	}

	function Tabla_gen($result)
	{
		$tabla="";
		foreach ($result as $renglon) 
		{
			$tabla.="<tr>";
			// $tabla.='<td align="center">'.$renglon[0].'</td>';
			$tabla.='<td align="center"><img src='.$renglon[1].' width="100" height="100"></td>';
			$tabla.='<td align="center"style="color:#fff">'.$renglon[2].'</td>';
			$tabla.='<td align="center"style="color:#fff">'.$renglon[3].'</td>';
			$tabla.='<td align="center"><audio controls><source src='.$renglon[4].' type="audio/mpeg"</td>';
			$tabla.='<td align="center"><input class="eliminar" type="button" id="btneliminar" name="btneliminar" value="Eliminar" onclick="javascript: eliminar('.$renglon[0].');"></td>';
			$tabla.='<td align="center"><input class="modificar" type="button" id="RegistrarModal" name="btnmodificar" value="Modificar" onclick="javascript: modificar('.$renglon[0].');"></td>
			</tr>';
		}
		return $tabla;
	}
}
?>