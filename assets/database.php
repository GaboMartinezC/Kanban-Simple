<?php
	$conn = new mysqli('localhost', 'root', '', 'kanban','3306');
	if ($conn->connect_error) 
	{
    	echo '<script type="text/javascript">'
        , 'window.alert("Error en conexion");'
        , '</script>';
	}
?>