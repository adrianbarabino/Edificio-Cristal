
			<article class="contenido-pagina" id="inicio">
				<h2>Bienvenidos al sitio</h2>
				<figure id="imagenfrente">
					<img class="imagen frente" src="/imagenes/fotos/frente.jpg" />
				</figure>
				<p>Los edificios Cristal 1 y 2, están ubicados en pleno centro de la capital santacruceña, Río Gallegos, cuentan con 20 departamentos con servicio de habitaciones, estacionamiento, tv por cable, entre otras comodidades.</p>
				<p>Todos los departamentos se encuentran amueblados y se alquilan por día. Hay departamentos de una habitación, para una y dos personas, y otros de 2 habitaciones para tres o cuatro personas.</p>
				<p>Te damos la bienvenida a nuestro sitio web, donde podrás ver fotos de los departamentos, enterarte de las comodidades y reservar o contactarnos.</p>
  				<div style="clear: both"></div>
			</article>
			<article class="contenido-pagina" id="comodidades">
				<h2>Comodidades</h2>
				<figure id="imagenfrente">
					<img class="imagen frente" src="/imagenes/fotos/frente.jpg" />
				</figure>
				<p>Los edificios Cristal 1 y 2, están ubicados en pleno centro de la capital santacruceña, Río Gallegos, cuentan con 20 departamentos con servicio de habitaciones, estacionamiento, tv por cable, entre otras comodidades.</p>
				<p>Todos los departamentos se encuentran amueblados y se alquilan por día. Hay departamentos de una habitación, para una y dos personas, y otros de 2 habitaciones para tres o cuatro personas.</p>
				<p>Te damos la bienvenida a nuestro sitio web, donde podrás ver fotos de los departamentos, enterarte de las comodidades y reservar o contactarnos.</p>
  				<div style="clear: both"></div>
			</article>
			<article class="contenido-pagina" id="fotos">
				<h2>Fotos</h2>
       <div id="galleria">
       	<?php
       	for($i=1;$i<36;$i++)
       	{
       		?>
            <a href="/imagenes/galeria/<?php echo $i; ?>.jpg">
                <img 
                    src="/imagenes/galeria/thumbs/<?php echo $i; ?>.jpg",
                    data-big="/imagenes/galeria/<?php echo $i; ?>.jpg"
                    data-title="Edificio Cristal"
                    data-description="Edificio Cristal"
                >
            </a>
       		<?php
       	}
       	?>

        </div><div style="clear: both"></div>
			</article>
			<article class="contenido-pagina" id="contacto">
				<h2>Contactenos</h2>
				<section class="mapa"> <div id="mapa"></div> </section>
				<section class="formulario">
					<form action="">
						<input type="text" name="nombre" id="nombre" placeholder="Nombre y Apellido">
						<fieldset class="forminfo cerrado">
							<input type="text" name="mail" id="mail" placeholder="Email">
							<input type="text" name="telefono" id="telefono" placeholder="Teléfono">
							
						</fieldset>				
						<label for="reserva">¿Quiere reservar?<input type="checkbox" id="reserva" name="reserva" value="1"></label>
						<fieldset class="reservas cerrado">
							<input type="text" name="fecha_reserva" id="fecha_reserva" placeholder="Desde el día" value="">
							<input type="text" name="fecha_fin_reserva" id="fecha_fin_reserva" placeholder="Hasta.." value="">
						</fieldset>		
						<textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Mensaje a enviar..."></textarea>
						<fieldset class="acciones">
							<input type="button" name="enviar" id="enviar" value="Enviar">
							<input type="button" name="limpiar" id="limpiar" value="Limpiar">							
						</fieldset>
					</form>
				</section>
			</article>
		