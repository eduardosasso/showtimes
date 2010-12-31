<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class estacao_ipanema extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Estação Ipanema";
		$cinema->address = "R. Visc. de Pirajá, 605 - Ipanema, Rio de Janeiro, 22410-003, Brazil";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.9837835";
		$cinema->long = "-43.213207";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Rio+de+Janeiro+RJ&amp;tid=8d5914969c424071";
	}

}
?>