<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class odeon_petrobras extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Odeon Petrobras";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "RJ";
		$cinema->city = "";
		$cinema->lat = "";
		$cinema->long = "";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Itabora%C3%AD+RJ&amp;tid=3c61d2cd19ff5ac";
	}

}
?>