<?php

if($pagina == "inicio" || $pagina == "contacto" || $pagina == "comodidades" || $pagina == "fotos"){
	
	if($pagina == "inicio"){

?>
	<meta property="og:title" content="Inicio" />
	<meta property="og:url" content="http://www.edificiocristal.com/inicio/" />
	<meta property="og:image" content="http://edificiocristal.com/imagenes/fotos/frente.jpg" />
<?php

	}	

	if($pagina == "comodidades"){
?>
	<meta property="og:title" content="Comodidades" />
	<meta property="og:url" content="http://www.edificiocristal.com/comodidades/" />
	<meta property="og:image" content="http://edificiocristal.com/imagenes/fotos/frente.jpg" />
<?php

	}	

	if($pagina == "fotos"){
?>
	<meta property="og:title" content="Fotos" />
	<meta property="og:url" content="http://www.edificiocristal.com/fotos/" />
	<meta property="og:image" content="http://edificiocristal.com/imagenes/fotos/frente.jpg" />
<?php

	}	

	if($pagina == "contacto"){
?>
	<meta property="og:title" content="Contacto" />
	<meta property="og:url" content="http://www.edificiocristal.com/contacto/" />
	<meta property="og:image" content="http://edificiocristal.com/imagenes/fotos/frente.jpg" />
<?php
	}
?>

	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="Edificio Cristal" />
<?php
}




?>