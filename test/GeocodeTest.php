<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

//phpunit test/GeocodeTest.php
class GeocodeTest extends PHPUnit_Framework_TestCase {
	
	function test_all(){
		$address = "Av. Mal. Floriano Peixoto, 44 - Gonzaga, Santos - São Paulo, 11060-300, Brazil";
		//$address = "sd;lksdl;skdl;skd";
		$geocode = new Geocode($address);
		$lat = $geocode->address();
		
		echo "<pre>";
		print_r($geocode->state());
		echo "</pre>";
		
	}
}
?>