console.log("Edificio Cristal ACTIVADO");
var rawWidth,
	rawHeight,
	origAspect,
	containerWidth,
	containerHeight,
	targetAspect,
	multi;

var mostrar_form_reservas = false;
var mostrar_form_info = false;
var fecha1 = new Date();
fecha1.format('d/m/Y');
var fecha2 = new Date();
fecha2.format('d/m/Y');
window.EdificioCristal = {};

EdificioCristal.Views = {};
EdificioCristal.Collections = {};
EdificioCristal.Models = {};
EdificioCristal.Routers = {};
EdificioCristal.util = {};

window.app = {};
window.routers = {};
window.plugs = {};
window.views = {};
window.collections = {};

	var playing = false;
$(document).on("ready", iniciar);

function iniciar () {
	$(document).on('alertar', function(e, grito){
		console.log(grito);
		console.log("HOLA");
	});

	// Mapa

          
	//  FIN MAPA
 
    $('.musica').click(function() {
        $(this).toggleClass("down");
 
        if (playing == false) {
            document.getElementById('ambiente').play();
            playing = true;
            $(this).addClass("reproduciendo");
 
        } else {
            document.getElementById('ambiente').pause();
            playing = false;
            $(this).removeClass("reproduciendo");
        }
 
 
    });
    document.getElementById('ambiente').volume = 0.5;
    document.getElementById('ambiente').loop = true;
    $("#ambiente").on("ended", function(){
        $(".musica").removeClass("reproduciendo");
        playing = false;

    })
	  $('#slides').slidesjs({
        width: 900,
        height: 300,
        navigation: true,
        play: {
          auto: true
        }
      });
      function mostrarInfoForm (info) {
      	if(mostrar_form_info == false){
      	$(".forminfo.cerrado").slideDown();
      	$(".forminfo").removeClass("cerrado");
      		mostrar_form_info = true;
      	}else{
      		console.log("Nada...")
      	}
      }
      function mostrarReservas (info) {
      	console.log("Hice click aca");
      	if(mostrar_form_reservas == false){
      		console.log("Hice click para abrir");
      	$(".reservas.cerrado").slideDown();
      	mostrar_form_reservas = true;
      	}else{
      		console.log("Hice click para cERRAR");
      	$(".reservas").slideUp();
      	mostrar_form_reservas = false;
      		
      	}
      }
	$("#nombre").on("click", mostrarInfoForm);
	$("#reserva").change(mostrarReservas);
	$('#fecha_reserva').DatePicker({
		format:'d/m/Y',
		date: fecha1,
		current: fecha1,
		starts: 1,
		position: 'r',
		onBeforeShow: function(){
			$('#fecha_reserva').DatePickerSetDate(fecha1, true);
		},
		onChange: function(formated, dates){
			fecha1 = formated;
			$('#fecha_reserva').val(formated);
			$('#fecha_reserva').DatePickerHide();
		}
	});
	$('#fecha_fin_reserva').DatePicker({
		format:'d/m/Y',
		date: fecha2,
		current: fecha2,
		starts: 1,
		position: 'r',
		onBeforeShow: function(){
			$('#fecha_fin_reserva').DatePickerSetDate(fecha2, true);
		},
		onChange: function(formated, dates){
			fecha2 = formated;
			$('#fecha_fin_reserva').val(formated);
			$('#fecha_fin_reserva').DatePickerHide();
		}
	});
	$("nav li a").each(function(i, v){
		var url = $(this).attr("href");
		url = url.substring(0, url.length-1);
		$(this).attr("href", "javascript:void(0);");
		$(this).attr("rel", "address:"+url);
	});

    EdificioCristal.Routers.BaseRouter = Backbone.Router.extend({
		routes: {
			"" :  "inicio",
			"inicio" :  "inicio",
			"inicio/" :  "inicio",
			"comodidades" :  "comodidades",
			"comodidades/" :  "comodidades",
			"fotos" :  "fotos",
			"fotos/" :  "fotos",
			"contacto" :  "contacto",
			"contacto/" :  "contacto"
		},
		initialize : function(){
			var self = this;

		},
		inicio: function(){
			$("header nav ul li.activo").removeClass("activo");
			$("header nav ul li:contains('INICIO')").addClass("activo");
			$("#inicio").fadeIn();
			$(".ruta").html("/inicio");
			$("#comodidades").fadeOut();
			$("#fotos").fadeOut();
			$("#contacto").fadeOut();
		},
		fotos: function(){
			$("header nav ul li.activo").removeClass("activo");
			$("header nav ul li:contains('FOTOS')").addClass("activo");
			$(".ruta").html("/fotos");
			$("#fotos").fadeIn();
			$("#comodidades").fadeOut();
			$("#inicio").fadeOut();
			$("#contacto").fadeOut();

		    // Load the classic theme
		    Galleria.loadTheme('/galleria/galleria.classic.min.js');

		    // Initialize Galleria
		    Galleria.run('#galleria');
		},
		comodidades: function(){
			$("header nav ul li.activo").removeClass("activo");
			$("header nav ul li:contains('COMODIDADES')").addClass("activo");
			$(".ruta").html("/comodidades");
			$("#comodidades").fadeIn();
			$("#fotos").fadeOut();
			$("#inicio").fadeOut();
			$("#contacto").fadeOut();
		},
		contacto: function(){
			$("header nav ul li.activo").removeClass("activo");
			$("header nav ul li:contains('CONTACTO')").addClass("activo");
			$(".ruta").html("/contacto");
			$("#contacto").fadeIn();
			$("#comodidades").fadeOut();
			$("#inicio").fadeOut();
			$("#fotos").fadeOut();
			iniciar_mapa();
			efectos_popups_mapa();
		}
	});
    window.routers.base = new EdificioCristal.Routers.BaseRouter();
    Backbone.history.start({
			pushState : true,
			root: "/"
	});
	$("nav li a").on("click", function(){
		var url = $(this).attr("rel");
		console.log(url);
		url = url.split(":")
		url = url[1];
		Backbone.history.navigate(url+'/', {trigger:true})
	})
	window.AppView = Backbone.View.extend({
	  el: $("body"),
	  events: {
	  },
	  cargarPagina: function () {

	  }
	});
	var appview = new AppView;

}