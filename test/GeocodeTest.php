<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

//phpunit test/GeocodeTest.php
class GeocodeTest extends PHPUnit_Framework_TestCase {
	
	function test_all(){
		$address = "Saisudo, 6580 - Brasília - DF, 71219-900";
		//$address = "sd;lksdl;skdl;skd";
		$geocode = new Geocode($address);
		$lat = $geocode->address();
		
		echo "<pre>";
		print_r($lat);
		echo "</pre>";
		
	}
}
?>