<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class instituto_moreira_salles extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "1dab383a12a68df4";
		$cinema->name = "Instituto Moreira Salles";
		$cinema->address = "R. Marquês de São Vicente, 476 - Gávea, Rio de Janeiro, 22451-040, Brazil";
		$cinema->phone = "";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.9820177";
		$cinema->long = "-43.2390652";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Rio+de+Janeiro+RJ&tid=1dab383a12a68df4";
	}

}
?>