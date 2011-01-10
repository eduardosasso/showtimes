<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class boa_vista extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "764e577d4c505bce";
		$cinema->name = "Boa Vista";
		$cinema->address = "R. José de Alencar, 105 - Ilha do Leite, Recife Antigo - Pernambuco, 50070-030, Brazil";
		$cinema->phone = "";
		$cinema->state = "Pernambuco";
		$cinema->state_code = "PE";
		$cinema->city = "Recife";
		$cinema->lat = "-8.0653704";
		$cinema->long = "-34.8925543";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Abreu+e+Lima+PE&tid=764e577d4c505bce";
	}

}
?>