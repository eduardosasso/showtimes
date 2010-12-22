<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

require_once("$root/includes/phpQuery/phpQuery.php");
require_once("$root/includes/simple_html_dom.php");

require_once("$root/objects/Cinema.php");
require_once("$root/objects/Movie.php");

abstract class AbstractCinemaAdapter {
	
	abstract protected function scrape();
	
	public function print_json(){
		header("Content-type: application/json");
		
		$cinema = $this->scrape();

		echo json_encode($cinema);
	}
	
	public function serialize_data(){
		$cinema = $this->scrape();
		return serialize($cinema);
	}
}
?>