<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class rio_sul extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "6b2e200a42991f7e";
		$cinema->name = "Rio Sul";
		$cinema->address = "R. Lauro Müller, 116 - Leme, Rio de Janeiro, 22290-160, Brazil";
		$cinema->phone = "(0xx)21 2461-2461";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.9565006";
		$cinema->long = "-43.1765913";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Itabora%C3%AD+RJ&tid=6b2e200a42991f7e";
	}

}
?>