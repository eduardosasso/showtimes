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
	
	function xtest_parse_url() {
		$url = "http://www.google.com.br?x=1&tid=2323&a=2";
		$tid = Helper::get_url_param($url, 'tid');
		echo "$tid";		
	}
	
	function test_telefone(){
		//$endereco = 'R. Prof. Pedro Viriato Parigot de Souza, 600, Curitiba - PR, 81200-100 - (0xx)41 3317-6419';
		$endereco = 'R. XV de Novembro, 8, Niterói - RJ, 24020-125';
		
		$endereco = Helper::format_address($endereco);
		
		echo "<pre>";
		print_r($endereco);
		echo "</pre>";
		
	}
	
	function xtest_html_decode() {
		$url = "http://google.com.br/movies?near=Barra+do+Pira%C3%AD+RJ&amp;tid=52ac29dc6228ec0";
		$url = html_entity_decode($url);
		echo $url;
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