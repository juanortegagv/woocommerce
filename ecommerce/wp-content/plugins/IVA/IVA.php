<?php /*
Plugin Name: IVA Venezuela.
Plugin URI: https://github.com/juanortegagv/woocommerce/
Description: Genera el IVA de 7% y 9% dependiendo del precio
Version: 1.00
Author: Juan Ortega
Author URI: https://github.com/juanortegagv/woocommerce

Copyright: 2018- Juan Ortega
*/

add_filter("","iva_porcentaje");

function iva_porcentaje($monto){
	$total = 0;

	if($monto>2000000){
		$total = ($monto * 0.07)+$monto;
	}else{
		$total = ($monto * 0.09)+$monto;
	}	
}