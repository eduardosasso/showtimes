<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

//phpunit test/BasicTest.php
class BasicTest extends PHPUnit_Framework_TestCase {
	
	function xtest_transliterate(){
		echo Helper::transliterate('ação áéúç áááá');
	}

	function xtest_clean_string(){
		echo Helper::clean_string('GNC Iguatémi Porto Alegre');
	}
	
	function test_parse_url() {
		$url = "http://www.google.com.br?x=1&tid=2323&a=2";
		$tid = Helper::get_url_param($url, 'tid');
		echo "$tid";
		
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