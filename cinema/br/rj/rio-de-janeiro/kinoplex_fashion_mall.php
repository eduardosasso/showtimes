<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class kinoplex_fashion_mall extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "61c8fe12e1b243c2";
		$cinema->name = "Kinoplex Fashion Mall";
		$cinema->address = "Estr. da Gávea Pequena, 899 - Alto da Boa Vista, Rio de Janeiro, 20531-420, Brazil";
		$cinema->phone = "(0xx)21 2461-2461";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.9739642";
		$cinema->long = "-43.2806013";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Rio+de+Janeiro+RJ&tid=61c8fe12e1b243c2";
	}

}
?>