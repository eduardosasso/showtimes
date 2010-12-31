<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class gnc_camboriu extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "GNC Camboriú";
		$cinema->address = "Av. Santa Catarina, 1 - Camboriú - Santa Catarina, 88340-000, Brazil";
		$cinema->state = "Santa Catarina";
		$cinema->state_code = "SC";
		$cinema->city = "Camboriú";
		$cinema->lat = "-27.0190866";
		$cinema->long = "-48.6522387";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br";
	}

}
?>