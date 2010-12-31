<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinepolis_boulevard_belem extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinépolis Boulevard Belém";
		$cinema->address = "Av. Visc. de Souza Franco, 776 - Umarizal, Belém - Pará, 66053-000, Brazil";
		$cinema->state = "Para";
		$cinema->state_code = "PA";
		$cinema->city = "Belém";
		$cinema->lat = "-1.4449191";
		$cinema->long = "-48.4888975";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br";
	}

}
?>