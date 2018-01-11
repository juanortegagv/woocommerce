<?php
/*
Plugin Name: Formatos.
Plugin URI: https://github.com/juanortegagv/woocommerce/
Description: Cambia título y parrafo de la página
Version: 1.00
Author: Juan Ortega
Author URI: https://github.com/juanortegagv/woocommerce
License: GPLv2 or later
Text Domain: Formatosec
Copyright: 2018- Juan Ortega
*/


add_filter("the_title","sec_cambiatitulos");
add_filter("the_content","sec_cambiacontenido");

function sec_cambiatitulos($titulo){
	return "<h3 style='color:green'>".$titulo."</h3>";
}
function sec_cambiacontenido($contenido){
	return "<div style='color:blue'>".$contenido."</div>";
}