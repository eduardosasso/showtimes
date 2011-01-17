<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';


//phpunit test/adapters/GoogleMoviesAdapterTest.php
class GoogleMoviesAdapterTest extends PHPUnit_Framework_TestCase {
	
	function test_scrape(){
		$arcoiris = new cinemark_floripa_shopping();
		$cinema = $arcoiris->update();
		
		echo "<pre>";
		print_r($cinema);
		echo "</pre>";
	}
}
?>