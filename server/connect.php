<?php 
	$db = mysqli_connect('localhost','usuario', 'contraseña', 'base de datos'); 

	if(mysqli_connect_errno())
	{
		echo 'Failed to connect to MySQL: '.mysqli_connect_error();
	}
 ?>