<?php

// include("inicio.php");

if( isset( $_GET["id"] ) && !empty( $_GET["id"] ) ){

	switch ($_GET["id"])
		{
		 	case 'DesignDigital':
		 		include("a02DesignDigital.php");
		 		break;

			case 'DesignDevWeb':
				include("a03DesignDevWeb.php");
		 		break;

		 	case 'PublicidadDig':
		 		include("a04PublicidadDig.php");
		 		break;

		 	case 'RedsSocial':
		 		include("a05RedsSocial.php");
		 		break;
		 	
		 	default:
		 		include("inicio.php");
		 		break;
		}
}else{
	include("inicio.php");
}

?>