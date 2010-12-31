<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_natal extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemark Natal";
		$cinema->address = "Av. Bernardo Vieira, 3775 - Lagoa Nova, Natal - Rio Grande do Norte, 59051-000, Brazil";
		$cinema->state = "Rio Grande do Norte";
		$cinema->state_code = "RN";
		$cinema->city = "Natal";
		$cinema->lat = "-5.8120682";
		$cinema->long = "-35.2066938";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br";
	}

}
?>