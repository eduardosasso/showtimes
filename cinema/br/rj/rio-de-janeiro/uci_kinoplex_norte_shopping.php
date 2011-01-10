<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class uci_kinoplex_norte_shopping extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "6432c3b5c161b207";
		$cinema->name = "UCI Kinoplex Norte Shopping";
		$cinema->address = "Av. Dom Helder Câmara, 5080 - Cachambi, Rio de Janeiro, 20771-004, Brazil";
		$cinema->phone = "";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.8868143";
		$cinema->long = "-43.2808478";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Belford+Roxo+RJ&tid=6432c3b5c161b207";
	}

}
?>