<?php
	
	$id = filter_input(INPUT_GET, 'ID');
	$contraseña = filter_input(INPUT_GET, 'CONTRASEÑA');
	
	if ((!empty($id))&&(!empty($contraseña))){
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "Aladelta0001";
		
		//Aquí empieza la conexión a la base con los datos introducidos
		$conexion = new mysqli($id, $dbusername, $dbpassword, $dbname);
		
		if (mysqli_connect_error){
			die('Error de conexión ('. mysqli_connect_errno() .') '
			. mysqli_connect_error());
		}
		
	}
	
	else{
		echo "Los campos deben ser rellenados para poder acceder.";
		die();
	}
	
?>