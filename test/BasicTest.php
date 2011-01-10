<?php
require_once "Mail.php";
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

function sort_by_name($a, $b) { 
  if(  $a->name == $b->name ){ return 0 ; } 
  return ($a->name < $b->name) ? -1 : 1;
}

//phpunit test/BasicTest.php
class BasicTest extends PHPUnit_Framework_TestCase {
	
	
	
	function test_order_movies(){
		$url = "http://showtimes.dev/cinema/mg/juiz-de-fora/uci_kinoplex_independencia/";
		$buffer = Helper::http_req($url);
		$cinema = json_decode($buffer);
		
		$movies = $cinema->movies;
		usort($movies,'sort_by_name');
		
		echo "<pre>";
		print_r($movies);
		echo "</pre>";
	}
	
	function xtest_dir() {
		$filename = "patio_brasil.php";
		$path = Env::path("cinema/br/df/");
		//echo $path;
		
		if (Helper::recursive_file_exists($filename, $path)) {
			echo "achou";
		} else {
			echo "não achou";
		}
		
	}
	function xtest_replace() {
		$file = Env::path() . 'cinema/br/rn/natal/cinemark_natal.php';
		$x =str_replace(Env::path(), "", $file);
		echo $x;
	}
	function xtest_clean_database(){
		$db = DatabaseFactory::get_provider();

		$db->clean_database();

	}
	
	function xtest_get_file_list(){
		$path = Env::path() . 'cinema/br';
		$files = Helper::get_file_list($path);
		
		echo "<pre>";
		print_r($files);
		echo "</pre>";
		
	}
	
	function xtest_microtime(){
		$start = "1294229146";
		$end = "1294143742";
//echo time();
		echo Helper::elapsed_time($start);
	}
	
	function xtest_transliterate(){
		echo Helper::transliterate('ação áéúç áááá');
	}

	function xtest_clean_string(){
		echo Helper::clean_string('São Paulo');
	}
	
	function xtest_parse_url() {
		$url = "http://www.google.com.br?x=1&tid=2323&a=2";
		$tid = Helper::get_url_param($url, 'tid');
		echo "$tid";		
	}
	
	function xtest_telefone(){
		$endereco = 'R. Prof. Pedro Viriato Parigot de Souza, 600, Curitiba - PR, 81200-100 - (0xx)41 3317-6419';
		//$endereco = 'R. XV de Novembro, 8, Niterói - RJ, 24020-125';
		
		$endereco = Helper::format_address($endereco);
		
		echo "<pre>";
		print_r($endereco);
		echo "</pre>";		
	}
	
	function xvalidate($var){
		return empty($var->id);
	}
	
	function xtest_find_cinema() {
		//$url = 'http://www.google.com.br/movies?near=porto+alegre&mid=797b86a5ed990712';		
		$url = 'http://www.google.com.br/movies?near=blumenau&mid=797b86a5ed990712';
		
		$name = 'GNC Blumenau';
		
		$buffer = Helper::http_req($url);
		$html = str_get_html($buffer);
		
		$cinemas = $html->find('.showtimes .name a');
		
		foreach ($cinemas as $key => $cinema) {
			if ($cinema->innertext == $name) {
				echo $cinema->href;
			}
		}
		
	}
	
	function xtest_invalid_cinemas(){
		$cinema1 = new Cinema();
		$cinema1->id = '';
		$cinema1->name = "aaa";
		$cinema1->address = "aaa";
		
		$cinema2 = new Cinema();
		$cinema2->id = '123';
		$cinema2->name = "bbb";
		$cinema2->address = "bbb";
		
		$cinema3 = new Cinema();
		$cinema3->id = '';
		$cinema3->name = "bbb";
		$cinema3->address = "bbb";
		
		$cinemas[] = $cinema1;
		$cinemas[] = $cinema2;
		$cinemas[] = $cinema3;
		
		$no_id[] = array_filter($cinemas, function ($var) { return empty($var->id); } );
		
	}
	
	function xtest_mail(){
		$subject = 'teste';
		$body = 'Teste de corpo <br> Proxima linha';
		
		Sendmail::to_admin($subject,$body);
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