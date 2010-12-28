<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

//phpunit test/GeocodeTest.php
class GeocodeTest extends PHPUnit_Framework_TestCase {
	
	function test_all(){
		$address = "Marcolino Martins Cabral, 2525, Tubarão - SC";
		$geocode = new Geocode($address);
		$lat = $geocode->lat();
		
		echo "<pre>";
		print_r($lat);
		echo "</pre>";
	}

?>