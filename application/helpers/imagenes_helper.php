<?php
if (!defined('BASEPATH')){exit('No direct script access allowed');}

 function poner_imagen($nombre){

 	$ruta_imagen="<img src='http://localhost/ProyectoPHP/DeCorruptor/imagenes/$nombre.jpg' class='img-responsive center-block' style='width:100px' alt='Image'>";

	

	return  $ruta_imagen;

}

