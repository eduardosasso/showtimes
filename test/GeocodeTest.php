<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

//phpunit test/GeocodeTest.php
class GeocodeTest extends PHPUnit_Framework_TestCase {
	
	function test_all(){
		$address = "RST 453, 2780, Caxias do Sul - RS, 95110-690 - (0xx)54 3214-9166";
		//$address = "sd;lksdl;skdl;skd";
		$geocode = new Geocode($address);
		$lat = $geocode->address();
		
		echo "<pre>";
		print_r($lat);
		echo "</pre>";
		
	}
}
?>