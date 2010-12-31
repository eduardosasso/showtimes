<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class kinoplex_shopping_leblon extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Kinoplex Shopping Leblon";
		$cinema->address = "Av. Afrânio de Melo Franco, 290 - Leblon, Rio de Janeiro, 22430-060, Brazil";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.9817216";
		$cinema->long = "-43.2180321";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Rio+de+Janeiro+RJ&amp;tid=e231b96c2e304ae9";
	}

}
?>