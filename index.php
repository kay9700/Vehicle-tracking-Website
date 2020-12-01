<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rastreando</title>
<link rel="icon" href="images/icono.png" type="image/x-icon">
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2025 Orange
http://www.tooplate.com/view/2025-orange
-->
<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "tooplate_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" />    
    
    <!-- Arquivos utilizados pelo jQuery lightBox plugin -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
    <!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->
    
    <!-- Ativando o jQuery lightBox plugin -->

    <script type="text/javascript">
    $(function() {
        $('.lightbox').lightBox();
    });
    </script>
    
</head>
<body>

<div id="tooplate_wrapper">
<div id="tooplate_header">
	
    
    
    <div id="tooplate_menu" class="ddsmoothmenu">
        <div style="position:absolute;visibility:visible; top:-5px; left: 190px "><a href="inicio.html"><img style="width: 120px;" src="images/logo_amarillo.png" alt="image" /></a></div>

          <ul>
               <li><a href="inicio.html">Inicio</a></li>
               <li><a href="sobre_nosotros.html">Sobre Nosotros</a>
                <ul>
                    <li><a href="#">Historia</a></li>
                    <li><a href="#">Nuestro equipo</a></li>
                    <li><a href="#">Visión y Misión</a></li>
                </ul>
              </li>
            <li><a href="index.php" class="selected">Rastreo</a>
                <ul>
                    <li><a href="#">Rastrear un camión</a></li>
                    <li><a href="#">Solicitar servicio</a></li>
                  </ul>
              </li>
            <li><a href="Reportar.html">Reportar un Problema</a></li>
            <li><a href="contacto.html">Contacto</a></li>
        </ul>
        
        <br style="clear: left" />
    </div> <!-- end of tooplate_menu -->
</div>
    
    <div id="tooplate_social">
    	<a href="#"><img src="images/facebook.png" alt="facebook" /></a>
        <a href="#"><img src="images/stumbleupon.png" alt="stumbleupon" /></a>
        <a href="#"><img src="images/feed.png" alt="feed" /></a>
        <a href="#"><img src="images/twitter.png" alt="twitter" /></a>        
    </div>
    
    <div id="tooplate_main_top"></div>
	
    <div id="tooplate_main">

        <style>
            #map-canvas {
              height: 600px;
              width:880px;
              margin: 0px;
              padding: 0px
            }
        </style>
        	
        <script language="javascript" src="js/jquery-1.7.2.min.js"></script>
        <script language="javascript" src="js/fancywebsocket.js"></script>
        <script src=https://maps.googleapis.com/maps/api/js?key=AIzaSyBd8u4bqDX0GzT6WeGA8M0AWd_jTrMqpcY&signed_in=true"></script>

        <script>


var map;
var marker;

function initialize() 
{
  var mapOptions = {
    zoom: 16,
    styles: [
                            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                            {
                            featureType: 'administrative.locality',
                            elementType: 'labels.text.fill',
                            stylers: [{color: '#d59563'}]
                            },
                            {
                            featureType: 'poi',
                            elementType: 'labels.text.fill',
                            stylers: [{color: '#d59563'}]
                            },
                            {
                            featureType: 'poi.park',
                            elementType: 'geometry',
                            stylers: [{color: '#263c3f'}]
                            },
                            {
                            featureType: 'poi.park',
                            elementType: 'labels.text.fill',
                            stylers: [{color: '#6b9a76'}]
                            },
                            {
                            featureType: 'road',
                            elementType: 'geometry',
                            stylers: [{color: '#38414e'}]
                            },
                            {
                            featureType: 'road',
                            elementType: 'geometry.stroke',
                            stylers: [{color: '#212a37'}]
                            },
                            {
                            featureType: 'road',
                            elementType: 'labels.text.fill',
                            stylers: [{color: '#9ca5b3'}]
                            },
                            {
                            featureType: 'road.highway',
                            elementType: 'geometry',
                            stylers: [{color: '#746855'}]
                            },
                            {
                            featureType: 'road.highway',
                            elementType: 'geometry.stroke',
                            stylers: [{color: '#1f2835'}]
                            },
                            {
                            featureType: 'road.highway',
                            elementType: 'labels.text.fill',
                            stylers: [{color: '#f3d19c'}]
                            },
                            {
                            featureType: 'transit',
                            elementType: 'geometry',
                            stylers: [{color: '#2f3948'}]
                            },
                            {
                            featureType: 'transit.station',
                            elementType: 'labels.text.fill',
                            stylers: [{color: '#d59563'}]
                            },
                            {
                            featureType: 'water',
                            elementType: 'geometry',
                            stylers: [{color: '#17263c'}]
                            },
                            {
                            featureType: 'water',
                            elementType: 'labels.text.fill',
                            stylers: [{color: '#515c6d'}]
                            },
                            {
                            featureType: 'water',
                            elementType: 'labels.text.stroke',
                            stylers: [{color: '#17263c'}]
                            }
                        ]
  };
  
  	map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);

	var pos = new google.maps.LatLng(60, 105);//Mi pocision
	 
	 var goldStar = {
		path: google.maps.SymbolPath.CIRCLE,
	    strokeColor: '#276ED0',
		fillColor: '#276ED0',
		fillOpacity: .9,
		strokeWeight: 1,
		scale: 6,
  	};
 	var marker = new google.maps.Marker({
			position: pos,
			icon: goldStar,
			draggable: true,
			animation: google.maps.Animation.DROP,
			map: map,
  	});
	
	map.setCenter(pos);
	 
}

function animar(newpocision)//pasamos la nueva ubicacion del cliente
{

	var pedazo = newpocision.split(",");
	var pos = new google.maps.LatLng(pedazo[0], pedazo[1]);//Mi pocision
	var pos = pos;//otro lugar -> donde el usuario se localiza
		
 		var goldStar = {
			path: google.maps.SymbolPath.CIRCLE,
			strokeColor: '#FF4E51',
			fillColor: '#FF4E51',
			fillOpacity: .9,
			strokeWeight: 1,
			scale: 5,
  		};
		var marker = new google.maps.Marker({
			position: pos,
			icon: goldStar,
			draggable: true,
			map: map
		});		
		
	 var options = {//opciones de la nueva pocision
			map: map,
			position: pos,
		  };
		  
  map.setCenter(options.position);//pocisionamos el mapa al centro de la nueva locacion
}

function handleNoGeolocation(errorFlag) 
{
	  if (errorFlag) 
	  {
		var content = 'Error: The Geolocation service failed.';
	  } 
	  else 
	  {
		var content = 'Error: Your browser doesn\'t support geolocation.';
	  }
	
	  var infowindow = new google.maps.InfoWindow(options);
	  map.setCenter(options.position);
}


google.maps.event.addDomListener(window, 'load', initialize);

function pocision(newpocision)//recibimos la nueva pocision del socket
{
	animar(newpocision);//ejecutamos la funcion 
}


        </script>

        <div id="map-canvas"></div>
        
		<div class="cleaner"></div>       
	</div> 
	
    <div id="tooplate_main_bottom"></div>
    
 	<div id="tooplate_bottom">
     	<div class="col_allw270">
        	<h4>Pages</h4>
            <ul class="bottom_list">
            	<li><a href="index.html">Inicio</a></li>
                <li><a href="about.html">Sobre Nosotros</a></li>
                <li><a href="portfolio.html">Rastreo</a></li>
                <li><a href="blog.html">Reportar un problema</a></li>
                <li><a href="contact.html">Contacto</a></li>
			</ul>
        </div>
		
  		<div class="col_allw270">
        	<h4>Blog Posts</h4>
            <ul class="bottom_list">
            	<li><a href="#">Ruta 1</a></li>
                <li><a href="#">Ruta 1</a></li>
                <li><a href="#">Ruta 1</a></li>
                <li><a href="#">Ruta 1</a></li>
                <li><a href="#">Ruta 1</a></li>
			</ul>
        </div>
		
    	<div class="col_allw270 col_last">
        	<h4>Sobre Nosotros</h4>
            <p>Truck Tracker es un proyecto hecho por tres estudiantes de Ingeniería Física con el fin de proveer una opción segura al momento de rastrear un transporte público o particular.</p>
        </div>   
		             
    	<div class="cleaner"></div>
    </div>    
    
    <div id="tooplate_footer">
	
        Copyright © 2020 <a href="#">Truck Tracker</a> 
        
    </div>
</div>

</body>
</html>