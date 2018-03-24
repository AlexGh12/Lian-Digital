<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

		<!-- Css -->

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/servicios.css">
<link rel="stylesheet" href="css/clientes.css">
<link rel="stylesheet" href="css/equipo.css">
<link rel="stylesheet" href="css/contacto.css">

		<!-- CSS Responsive -->

<link rel="stylesheet" href="css/responsive-servicios.css">
<link rel="stylesheet" href="css/responsive-menu.css">
<link rel="stylesheet" href="css/responsive-index.css">
<link rel="stylesheet" href="css/responsive-equipo.css">
<link rel="stylesheet" href="css/responsive-contacto.css">
<link rel="stylesheet" href="css/responsive-clientes.css">

		<!-- Font -->

<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>

		<!-- Animacion -->

<link href="assets/css/normalize.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/css/style.min.css" rel="stylesheet" type="text/css" media="all" />

		<!-- script -->

<script src='http://maps.googleapis.com/maps/api/js'></script>

<script>	// Google Maps API

	// Google Maps API

	function initialize(){

		var myCenter=new google.maps.LatLng(19.3894387,-99.136294);


					// Darcks
						// var styles = [
						//     {
						// 	   stylers: [
						// 		{ hue: "#000" },
						// 		{ saturation: -100 },
						// 		{ lightness: -80 },
						// 		{ visibility: "on" }
						//       ]
						//     },
						//     {
						//       featureType: "road",
						//       elementType: "geometry.fill",
						//       stylers: [
						//       	{ hue: "#000" },
						// 		{ lightness: 0 },
						// 		{ visibility: "on" }
						//       ]
						//     },
						//     {
						//       featureType: "road",
						//       elementType: "geometry.stroke",
						//       stylers: [
						//       	{ color: "#000000" },
						// 		{ lightness: -100 },
						// 		{ visibility: "on" }
						//       ]
						//     },
						//     {
						//       featureType: "road",
						//       elementType: "labels.text.fill",
						//       stylers: [
						//       	{ color: "#FFB64E" },
						// 		{ lightness: 0 },
						// 		{ visibility: "on" }
						//       ]
						//     },
						// ];


	// Claro Naranja	

		var styles = [
		    {
			   stylers: [
				{ hue: "#FF5400" },
				{ saturation: 0 },
				{ lightness: 0 },
				{ visibility: "simplified" }
		      ]
		    },

	// Rellenos de calles

		    {
		      featureType: "road",
		      elementType: "geometry.fill",
		      stylers: [
		      	{ color: "#FFB06C" },
				{ lightness: 0 },
				{ visibility: "on" }
		      ]
		    },

	// Trazo de calles

		    {
		      featureType: "road",
		      elementType: "geometry.stroke",
		      stylers: [
		      	{ color: "#8B8B89" },
				{ lightness: 0 },
				{ visibility: "on" }
		      ]
		    },

	// Texto

			{
		      featureType: "road",
		      elementType: "labels.icon",
		      stylers: [
		      	{ hue: "#FF0210" },
				{ lightness: 0 },
				{ visibility: "on" }
		      ]
		    },

		    {
		      featureType: "road",
		      elementType: "labels.text.fill",
		      stylers: [
		      	{ color: "#9B3A00" },
				{ lightness: 0 },
				{ visibility: "on" }
		      ]
		    },
		];

		var styledMap = new google.maps.StyledMapType(styles,{ name: "Styled Map" });

		var mapOptions = {
		  center:myCenter,
		  zoom:17,
		  scrollwheel: false,
		    mapTypeControlOptions: {
		      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
		    }
		  };

		var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

		var marker=new google.maps.Marker({
		  position:myCenter,
		  });

		marker.setMap(map);
		map.mapTypes.set('map_style', styledMap);
		map.setMapTypeId('map_style');

	}

		google.maps.event.addDomListener(window, 'load', initialize);
</script>

<script>	// Mostrar Equipo

	function toggleEqeuipo(){
		document.getElementById('equipoToogle').className = 'equipo-view';	
	};

	function outBoton(){
		document.getElementById('botonEquipo').style.color = 'rgba(255,255,255,.0)' ;	
	};
</script>

<script> 	// Activar Img de Clientes

	function ActivCliente1(){
		document.getElementById('Cl1').className = 'icon-1-avtive';
		document.getElementById('Cl2').className = 'icon-2';
		document.getElementById('Cl3').className = 'icon-3';
		document.getElementById('Cl4').className = 'icon-4';
		document.getElementById('Cl5').className = 'icon-5';
		document.getElementById('Cl6').className = 'icon-6';
		// document.getElementById('Cl7').className = 'icon-7';
		document.getElementById('Cl8').className = 'icon-8';
		document.getElementById('Cl9').className = 'icon-9';
	};

	function ActivCliente2(){
		document.getElementById('Cl1').className = 'icon-1';
		document.getElementById('Cl2').className = 'icon-2-avtive';
		document.getElementById('Cl3').className = 'icon-3';
		document.getElementById('Cl4').className = 'icon-4';
		document.getElementById('Cl5').className = 'icon-5';
		document.getElementById('Cl6').className = 'icon-6';
		// document.getElementById('Cl7').className = 'icon-7';
		document.getElementById('Cl8').className = 'icon-8';
		document.getElementById('Cl9').className = 'icon-9';
	};

	function ActivCliente3(){
		document.getElementById('Cl1').className = 'icon-1';
		document.getElementById('Cl2').className = 'icon-2';
		document.getElementById('Cl3').className = 'icon-3-avtive';
		document.getElementById('Cl4').className = 'icon-4';
		document.getElementById('Cl5').className = 'icon-5';
		document.getElementById('Cl6').className = 'icon-6';
		// document.getElementById('Cl7').className = 'icon-7';
		document.getElementById('Cl8').className = 'icon-8';
		document.getElementById('Cl9').className = 'icon-9';
	};

	function ActivCliente4(){
		document.getElementById('Cl1').className = 'icon-1';
		document.getElementById('Cl2').className = 'icon-2';
		document.getElementById('Cl3').className = 'icon-3';
		document.getElementById('Cl4').className = 'icon-4-avtive';
		document.getElementById('Cl5').className = 'icon-5';
		document.getElementById('Cl6').className = 'icon-6';
		// document.getElementById('Cl7').className = 'icon-7';
		document.getElementById('Cl8').className = 'icon-8';
		document.getElementById('Cl9').className = 'icon-9';
	};

	function ActivCliente5(){
		document.getElementById('Cl1').className = 'icon-1';
		document.getElementById('Cl2').className = 'icon-2';
		document.getElementById('Cl3').className = 'icon-3';
		document.getElementById('Cl4').className = 'icon-4';
		document.getElementById('Cl5').className = 'icon-5-avtive';
		document.getElementById('Cl6').className = 'icon-6';
		// document.getElementById('Cl7').className = 'icon-7';
		document.getElementById('Cl8').className = 'icon-8';
		document.getElementById('Cl9').className = 'icon-9';
	};

	function ActivCliente6(){
		document.getElementById('Cl1').className = 'icon-1';
		document.getElementById('Cl2').className = 'icon-2';
		document.getElementById('Cl3').className = 'icon-3';
		document.getElementById('Cl4').className = 'icon-4';
		document.getElementById('Cl5').className = 'icon-5';
		document.getElementById('Cl6').className = 'icon-6-avtive';
		// document.getElementById('Cl7').className = 'icon-7';
		document.getElementById('Cl8').className = 'icon-8';
		document.getElementById('Cl9').className = 'icon-9';
	};

	function ActivCliente7(){
		document.getElementById('Cl1').className = 'icon-1';
		document.getElementById('Cl2').className = 'icon-2';
		document.getElementById('Cl3').className = 'icon-3';
		document.getElementById('Cl4').className = 'icon-4';
		document.getElementById('Cl5').className = 'icon-5';
		document.getElementById('Cl6').className = 'icon-6';
		document.getElementById('Cl7').className = 'icon-7-avtive';
		document.getElementById('Cl8').className = 'icon-8';
		document.getElementById('Cl9').className = 'icon-9';
	};

	function ActivCliente8(){
		document.getElementById('Cl1').className = 'icon-1';
		document.getElementById('Cl2').className = 'icon-2';
		document.getElementById('Cl3').className = 'icon-3';
		document.getElementById('Cl4').className = 'icon-4';
		document.getElementById('Cl5').className = 'icon-5';
		document.getElementById('Cl6').className = 'icon-6';
		// document.getElementById('Cl7').className = 'icon-7';
		document.getElementById('Cl8').className = 'icon-8-avtive';
		document.getElementById('Cl9').className = 'icon-9';
	};

	function ActivCliente9(){
		document.getElementById('Cl1').className = 'icon-1';
		document.getElementById('Cl2').className = 'icon-2';
		document.getElementById('Cl3').className = 'icon-3';
		document.getElementById('Cl4').className = 'icon-4';
		document.getElementById('Cl5').className = 'icon-5';
		document.getElementById('Cl6').className = 'icon-6';
		// document.getElementById('Cl7').className = 'icon-7';
		document.getElementById('Cl8').className = 'icon-8';
		document.getElementById('Cl9').className = 'icon-9-avtive';
	};
</script>

<script> 	// Cambio de contenido de Clientes

	function ActivarInfo1(){
		document.getElementById('Cl-in2').className = 'view-info-clientes-none';
		document.getElementById('Cl-in3').className = 'view-info-clientes-none';
		document.getElementById('Cl-in4').className = 'view-info-clientes-none';
		document.getElementById('Cl-in5').className = 'view-info-clientes-none';
		document.getElementById('Cl-in6').className = 'view-info-clientes-none';
		// document.getElementById('Cl-in7').className = 'view-info-clientes-none';
		document.getElementById('Cl-in8').className = 'view-info-clientes-none';
		document.getElementById('Cl-in9').className = 'view-info-clientes-none';
		document.getElementById('Cl-in1').className = 'view-info-clientes';
	};

	function ActivarInfo2(){
		document.getElementById('Cl-in1').className = 'view-info-clientes-none';
		document.getElementById('Cl-in3').className = 'view-info-clientes-none';
		document.getElementById('Cl-in4').className = 'view-info-clientes-none';
		document.getElementById('Cl-in5').className = 'view-info-clientes-none';
		document.getElementById('Cl-in6').className = 'view-info-clientes-none';
		// document.getElementById('Cl-in7').className = 'view-info-clientes-none';
		document.getElementById('Cl-in8').className = 'view-info-clientes-none';
		document.getElementById('Cl-in9').className = 'view-info-clientes-none';
		document.getElementById('Cl-in2').className = 'view-info-clientes';
	};

	function ActivarInfo3(){
		document.getElementById('Cl-in1').className = 'view-info-clientes-none';
		document.getElementById('Cl-in2').className = 'view-info-clientes-none';
		document.getElementById('Cl-in4').className = 'view-info-clientes-none';
		document.getElementById('Cl-in5').className = 'view-info-clientes-none';
		document.getElementById('Cl-in6').className = 'view-info-clientes-none';
		// document.getElementById('Cl-in7').className = 'view-info-clientes-none';
		document.getElementById('Cl-in8').className = 'view-info-clientes-none';
		document.getElementById('Cl-in9').className = 'view-info-clientes-none';
		document.getElementById('Cl-in3').className = 'view-info-clientes';
	};

	function ActivarInfo4(){
		document.getElementById('Cl-in1').className = 'view-info-clientes-none';
		document.getElementById('Cl-in2').className = 'view-info-clientes-none';
		document.getElementById('Cl-in3').className = 'view-info-clientes-none';
		document.getElementById('Cl-in5').className = 'view-info-clientes-none';
		document.getElementById('Cl-in6').className = 'view-info-clientes-none';
		// document.getElementById('Cl-in7').className = 'view-info-clientes-none';
		document.getElementById('Cl-in8').className = 'view-info-clientes-none';
		document.getElementById('Cl-in9').className = 'view-info-clientes-none';
		document.getElementById('Cl-in4').className = 'view-info-clientes';
	};

	function ActivarInfo5(){
		document.getElementById('Cl-in1').className = 'view-info-clientes-none';
		document.getElementById('Cl-in2').className = 'view-info-clientes-none';
		document.getElementById('Cl-in3').className = 'view-info-clientes-none';
		document.getElementById('Cl-in4').className = 'view-info-clientes-none';
		document.getElementById('Cl-in6').className = 'view-info-clientes-none';
		// document.getElementById('Cl-in7').className = 'view-info-clientes-none';
		document.getElementById('Cl-in8').className = 'view-info-clientes-none';
		document.getElementById('Cl-in9').className = 'view-info-clientes-none';
		document.getElementById('Cl-in5').className = 'view-info-clientes';
	};

	function ActivarInfo6(){
		document.getElementById('Cl-in1').className = 'view-info-clientes-none';
		document.getElementById('Cl-in2').className = 'view-info-clientes-none';
		document.getElementById('Cl-in3').className = 'view-info-clientes-none';
		document.getElementById('Cl-in4').className = 'view-info-clientes-none';
		document.getElementById('Cl-in5').className = 'view-info-clientes-none';
		// document.getElementById('Cl-in7').className = 'view-info-clientes-none';
		document.getElementById('Cl-in8').className = 'view-info-clientes-none';
		document.getElementById('Cl-in9').className = 'view-info-clientes-none';
		document.getElementById('Cl-in6').className = 'view-info-clientes';
	};

	function ActivarInfo7(){
		document.getElementById('Cl-in1').className = 'view-info-clientes-none';
		document.getElementById('Cl-in2').className = 'view-info-clientes-none';
		document.getElementById('Cl-in3').className = 'view-info-clientes-none';
		document.getElementById('Cl-in4').className = 'view-info-clientes-none';
		document.getElementById('Cl-in5').className = 'view-info-clientes-none';
		document.getElementById('Cl-in6').className = 'view-info-clientes-none';
		document.getElementById('Cl-in8').className = 'view-info-clientes-none';
		document.getElementById('Cl-in9').className = 'view-info-clientes-none';
		// document.getElementById('Cl-in7').className = 'view-info-clientes';
	};

	function ActivarInfo8(){
		document.getElementById('Cl-in1').className = 'view-info-clientes-none';
		document.getElementById('Cl-in2').className = 'view-info-clientes-none';
		document.getElementById('Cl-in3').className = 'view-info-clientes-none';
		document.getElementById('Cl-in4').className = 'view-info-clientes-none';
		document.getElementById('Cl-in5').className = 'view-info-clientes-none';
		document.getElementById('Cl-in6').className = 'view-info-clientes-none';
		// document.getElementById('Cl-in7').className = 'view-info-clientes-none';
		document.getElementById('Cl-in9').className = 'view-info-clientes-none';
		document.getElementById('Cl-in8').className = 'view-info-clientes';
	};

	function ActivarInfo9(){
		document.getElementById('Cl-in1').className = 'view-info-clientes-none';
		document.getElementById('Cl-in2').className = 'view-info-clientes-none';
		document.getElementById('Cl-in3').className = 'view-info-clientes-none';
		document.getElementById('Cl-in4').className = 'view-info-clientes-none';
		document.getElementById('Cl-in5').className = 'view-info-clientes-none';
		document.getElementById('Cl-in6').className = 'view-info-clientes-none';
		// document.getElementById('Cl-in7').className = 'view-info-clientes-none';
		document.getElementById('Cl-in8').className = 'view-info-clientes-none';
		document.getElementById('Cl-in9').className = 'view-info-clientes';
	};
</script>


















