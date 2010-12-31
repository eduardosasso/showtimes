<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class leblon extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Leblon";
		$cinema->address = "Av. Ataulfo de Paiva, 391 - Leblon, Rio de Janeiro, 22440-032, Brazil";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.9838013";
		$cinema->long = "-43.219857";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Rio+de+Janeiro+RJ&amp;tid=ece34d7ee0fbed9";
	}

}
?>