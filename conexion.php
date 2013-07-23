<?php
// Conectamos a la base de datos usando MySQLi, y los datos que ingresamos en configuracion.php

$db = new mysqli($config['servidor_db'], $config['usuario_db'], $config['clave_db'], $config['nombre_db']);
if($db->connect_errno > 0){
	die('Error al conectar con la base de datos: [' . $db->connect_error .']');
}

?>