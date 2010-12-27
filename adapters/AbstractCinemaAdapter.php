<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

require_once("$root/includes/phpQuery/phpQuery.php");
require_once("$root/includes/simple_html_dom.php");

require_once("$root/objects/Cinema.php");
require_once("$root/objects/Movie.php");

abstract class AbstractCinemaAdapter {
	
	abstract protected function scrape();
	
	public function print_json(){
		$time_begin = microtime(true);
		
		header("Content-type: application/json");
		
		$cinema = $this->scrape();
		
		$cinema->hash = md5(json_encode($cinema->movies));

		echo json_encode($cinema);
		
		// $time_end = microtime(true);
		// 		$time_final = $time_end - $time_begin;
		// 		error_log("tempo: $time_final");
	}
	
	public function serialize_data(){
		$cinema = $this->scrape();
		return serialize($cinema);
	}
	
	public function hash() {
		$cinema = $this->scrape();

		return md5(json_encode($cinema));
	}
}
?>