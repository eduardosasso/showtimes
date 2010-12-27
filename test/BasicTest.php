<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

//phpunit test/BasicTest.php
class BasicTest extends PHPUnit_Framework_TestCase {
	
	function xtest_transliterate(){
		echo Helper::transliterate('ação áéúç áááá');
	}

	function test_clean_string(){
		echo Helper::clean_string('GNC Iguatémi Porto Alegre');
	}

	
	public function xxtest_dir_exists() {
		$root_path = realpath('../' . $_SERVER["DOCUMENT_ROOT"]);

		$dh = @opendir("$root_path/cinema/br/rs/porto-alegre");
		
		if ($dh) {
			echo "achou";
		} else {
			echo "nao tem";
		}
		
	}	
			
}

?>