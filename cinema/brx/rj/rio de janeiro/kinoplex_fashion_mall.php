<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class kinoplex_fashion_mall extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Kinoplex Fashion Mall";
		$cinema->address = "Estr. da Gávea, 899 - Gávea, Rio de Janeiro, 22610-001, Brazil";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.9934508";
		$cinema->long = "-43.2558491";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Rio+de+Janeiro+RJ&amp;tid=61c8fe12e1b243c2";
	}

}
?>