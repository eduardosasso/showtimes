<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

//phpunit test/adapters/CinemarkAdapterTest.php
class CinemarkAdapterTest extends PHPUnit_Framework_TestCase {
	
	function test_all(){
		$cinemark = new cinemark_bourbon_ipiranga();
		//$cinemark = new cinemark_cidade_jardim();
		$cinema = $cinemark->scrape();
		
		echo "<pre>";
		print_r($cinema);
		echo "</pre>";		
	}
	
}
?>