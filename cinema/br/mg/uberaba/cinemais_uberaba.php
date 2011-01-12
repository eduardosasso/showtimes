<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemais_uberaba extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4879d99b253a2506";
		$cinema->name = "Cinemais Uberaba";
		$cinema->address = "Av. Santa Beatriz da Silva, 1501 - Uberaba - Minas Gerais, 38050-000, Brazil";
		$cinema->phone = "";
		$cinema->state = "Minas Gerais";
		$cinema->state_code = "MG";
		$cinema->city = "Uberaba";
		$cinema->lat = "-19.7673594";
		$cinema->long = "-47.9531686";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=%C3%81gua+Comprida+MG&tid=4879d99b253a2506";
	}

}
?>