<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class unibanco_arteplex_rj extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4ce5722e8fc9130a";
		$cinema->name = "Unibanco Arteplex RJ";
		$cinema->address = "Praia de Botafogo, 316 - Botafogo, Rio de Janeiro, 22250-040, Brazil";
		$cinema->phone = "";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.9450146";
		$cinema->long = "-43.1823621";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Itabora%C3%AD+RJ&tid=4ce5722e8fc9130a";
	}

}
?>