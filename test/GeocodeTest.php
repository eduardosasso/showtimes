<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

//phpunit test/GeocodeTest.php
class GeocodeTest extends PHPUnit_Framework_TestCase {
	
	function test_all(){
		$address = "Rua Túlio de Rose, 80, Porto Alegre - RS, 91340-110 - (0xx)51 3299-0624";
		//$address = "sd;lksdl;skdl;skd";
		$geocode = new Geocode($address);
		$lat = $geocode->address();
		
		echo "<pre>";
		print_r($lat);
		echo "</pre>";
		
	}
}
?>