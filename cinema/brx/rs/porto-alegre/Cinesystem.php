<?php 
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

require_once("$root/adapters/GoogleMoviesAdapter.php");

class Cinesystem extends GoogleMoviesAdapter {
	protected function get_url() {
		$cinema = 'http://www.google.com.br/movies?near=porto+alegre&tid=1f76f971434a044&sort=1&num=2000';				
		return $cinema;
	}
	
	// public function scrape() {
	// 		return array("id" => time());
	// 	}
	
}

?>