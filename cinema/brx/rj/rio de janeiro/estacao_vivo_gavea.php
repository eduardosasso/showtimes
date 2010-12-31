<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class estacao_vivo_gavea extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Estação Vivo Gávea";
		$cinema->address = "R. Marquês de São Vicente, 52 - Gávea, Rio de Janeiro, 22451-040, Brazil";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.9757879";
		$cinema->long = "-43.2283314";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Rio+de+Janeiro+RJ&amp;tid=791d07f3dbb30c59";
	}

}
?>