<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinepolis_lagoon extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "8354956df6f7ad8e";
		$cinema->name = "Cinépolis Lagoon";
		$cinema->address = "Av. Borges de Medeiros, 1424 - Lagoa, Rio de Janeiro, 22430-040, Brazil";
		$cinema->phone = "";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.9762663";
		$cinema->long = "-43.2188051";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Rio+de+Janeiro+RJ&tid=8354956df6f7ad8e";
	}

}
?>