<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class odeon_petrobras extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "3c61d2cd19ff5ac";
		$cinema->name = "Odeon Petrobras";
		$cinema->address = "Praça Floriano, 7 - Centro, Rio de Janeiro, 20031-050, Brazil";
		$cinema->phone = "(0xx)21 2240-1093";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.9117043";
		$cinema->long = "-43.1756642";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Itabora%C3%AD+RJ&tid=3c61d2cd19ff5ac";
	}

}
?>