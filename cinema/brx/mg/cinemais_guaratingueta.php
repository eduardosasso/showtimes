<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemais_guaratingueta extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemais Guaratinguetá";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "MG";
		$cinema->city = "";
		$cinema->lat = "";
		$cinema->long = "";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br";
	}

}
?>