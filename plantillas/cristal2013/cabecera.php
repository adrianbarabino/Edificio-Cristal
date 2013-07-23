<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Edificio Cristal</title>
    <?php
    // Requerimos el archivo con los metatags para los buscadores y el open graph de Facebook
    require("seo.php");
    ?>
  	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Bitter|Life+Savers|Advent+Pro:400,100,200,500,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/video-js.css">
	<link rel="stylesheet" href="/css/datepicker.css">
	<link rel="stylesheet" href="/css/estilos.css">
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="http://openlayers.org/dev/OpenLayers.js"></script>
	<script>

    var map;
    var mapa_esta_visible = false;
    var popup1,
	popup2,
	popup3,
	estado_popup1,
	estado_popup2,
	estado_popup3;
	function efectos_popups_mapa () {
        // Agregamos todos los popups
        map.addPopup(popup1);
        map.addPopup(popup2);
        map.addPopup(popup3);
        // Ocultamos todos los popups
        popup1.hide();
        popup2.hide();
        popup3.hide();
        // Segun el ícono que le pasemos el mouse, mostrará el popup y ocultará los otros.
        $("#OL_Icon_30").on('mouseover', function(){
            if(estado_popup3 == false){

            		popup2.hide();
                    popup1.hide();
                    popup3.show();

            	}	
        })
        $("#OL_Icon_26").on('mouseover', function(){
            if(estado_popup2 == false){

            		popup3.hide();
                    popup1.hide();
                    popup2.show();

            	}	
        })
        $("#OpenLayers_Map_2_OpenLayers_ViewPort").on('click', function () {
        	popup2.hide();
        	popup1.hide();
        	popup3.hide();
        })
        $("#OL_Icon_22").on('mouseover', function(){
            if(estado_popup1 == false){

            		popup3.hide();
                    popup2.hide();
                    popup1.show();

            }	
        })
    }

    function iniciar_mapa () {
      	if(mapa_esta_visible == false){

            map = new OpenLayers.Map("mapa");
            map.addLayer(new OpenLayers.Layer.OSM());
            // Declaramos los diferentes puntos
            var cristal1 = new OpenLayers.LonLat( -69.2187687644956,-51.62013121081562).transform(
                new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
                map.getProjectionObject() // to Spherical Mercator Projection
              ); 
            var cristal2 = new OpenLayers.LonLat( -69.21872584915106, -51.62057085039721).transform(
                new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
                map.getProjectionObject() // to Spherical Mercator Projection
              );
            var oficinas = new OpenLayers.LonLat( -69.2124172935487, -51.626925164981365).transform(
                new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
                map.getProjectionObject() // to Spherical Mercator Projection
              );
            var lonLat = new OpenLayers.LonLat( -69.2087687644956,-51.62313121081562)
              .transform(
                new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
                map.getProjectionObject() // to Spherical Mercator Projection
              );

            var zoom=14;

            var markers = new OpenLayers.Layer.Markers( "Markers" );
            map.addLayer(markers);
            var marcador_cristal_1 = new OpenLayers.Marker(cristal1);
            var marcador_cristal_2 = new OpenLayers.Marker(cristal2);
            var marcador_oficinas = new OpenLayers.Marker(oficinas);

            markers.addMarker(marcador_cristal_1);
            markers.addMarker(marcador_cristal_2);
            markers.addMarker(marcador_oficinas);

            estado_popup3 = false;
            estado_popup2 = false;
            estado_popup1 = false;

            popup2 = new OpenLayers.Popup("Popup",
            marcador_cristal_2.lonlat,
            new OpenLayers.Size(160,45),
            "<div class='burbuja-mapa'><i class='icon-building'></i>&nbsp;Edificio Cristal 2<br><i class='icon-map-marker'></i>&nbsp;Rivadavia y Roca</div>",
            null,
            true);
            popup1 = new OpenLayers.Popup("Popup",
            marcador_cristal_1.lonlat,
            new OpenLayers.Size(170,45),
            "<div class='burbuja-mapa'><i class='icon-building'></i>&nbsp;Edificio Cristal 1<br><i class='icon-map-marker'></i>&nbsp;Avenida Roca 1142</div>",
            null,
            true);

            popup3 = new OpenLayers.Popup("Popup",
            marcador_oficinas.lonlat,
            new OpenLayers.Size(210,60),
            "<div class='burbuja-mapa'><i class='icon-building'></i>&nbsp;Oficinas<br><i class='icon-map-marker'></i>&nbsp;Maipú y Tucumán<br><i class='icon-phone'></i>&nbsp;02966-432397 / 434889</div>",
            null,
            true);



            marcador_cristal_1.events.register('mouseout', marcador_cristal_1, function(evt) {     setTimeout( function() {  }, 10000)});

            marcador_cristal_2.events.register('mouseout', marcador_cristal_2, function(evt) {     setTimeout( function() { }, 10000)});

            marcador_oficinas.events.register('mouseout', marcador_oficinas, function(evt) {     setTimeout( function() { }, 10000)});

            map.setCenter (lonLat, zoom);
        }else{
        	console.log("El mapa ya está mostrado...")
        }
    }


</script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.4/underscore-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/backbone.js/1.0.0/backbone-min.js"></script>
	<script src="/js/vendor/jquery.slides.min.js"></script>
    <script src="/js/vendor/galleria-1.2.9.min.js"></script>
    <script src="/js/vendor/date.format.js"></script>
    <script src="/js/vendor/datepicker.js"></script>

</head>
<body>
	<section id="contenedor">