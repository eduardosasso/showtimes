<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class bay_market extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "2415b6f1ceb0547";
		$cinema->name = "Bay Market";
		$cinema->address = "R. Visc. do Rio Branco, 360 - Centro, Niterói - Rio de Janeiro, 24020-002, Brazil";
		$cinema->phone = "(0xx)21 2461-2461";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Niteroi";
		$cinema->lat = "-22.8897522";
		$cinema->long = "-43.1243182";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Itabora%C3%AD+RJ&tid=2415b6f1ceb0547";
	}

}
?>