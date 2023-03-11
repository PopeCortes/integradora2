<?php 
require 'config.php';

class BD_PDO
{
	//public $tot_reg;
	//public $ultimo_id;
	public function getConection ()	
	{
		try {
			    $conexion = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME.";",DB_USER,DB_PASS);
			       	// , 'array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"');
		}
		catch(PDOException $e)
		{
	         echo "Failed to get DB handle: " . $e->getMessage();
	         exit;    
	    }
	    return $conexion;
	}		

	public function Ejecutar_Instruccion($consulta_sql)
	{
		# code...
		$conexion = $this->getConection();
        $rows = array();        
		$query=$conexion->prepare($consulta_sql);
		if(!$query)
		{
         	return "Error al mostrar";
        }
		else
		{			
        	$query->execute();   
           	$this->tot_reg = $query->rowCount();     	
        	while ($result = $query->fetch())
			{
            	$rows[] = $result;
          	}			
            return $rows;
        }
	}	
}
?>