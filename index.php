<?php
require("configuracion.php");

// Cargamos el nombre de la plantilla, y requerimos el archivo principal de esa plantilla.
$plantilla = $config['plantilla'];
require("plantillas/".$plantilla."/estructura.php")


?>