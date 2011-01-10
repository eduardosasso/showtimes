<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class iguacu_top extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "68fec70e3775bde2";
		$cinema->name = "Iguaçú Top";
		$cinema->address = "Av. Governador Roberto Silveira, 540 - Santa Eugênia, Nova Iguaçu - Rio de Janeiro, 26285-060, Brazil";
		$cinema->phone = "(0xx)21 2461-2461";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Nova Iguaçu";
		$cinema->lat = "-22.7451601";
		$cinema->long = "-43.4568602";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Belford+Roxo+RJ&tid=68fec70e3775bde2";
	}

}
?>