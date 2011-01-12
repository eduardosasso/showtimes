<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

//phpunit test/adapters/ArcoirisAdapterTest.php
class ArcoirisAdapterTest extends PHPUnit_Framework_TestCase {
	
	function test_all(){
		echo uniqid();
		return;
		
		$arcoiris = new arcoiris_boulevard();
		$cinema = $arcoiris->update();
		
		// echo "<pre>";
		// print_r($cinema);
		// echo "</pre>";
		
	}
}
?>