<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemais_anapolis extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemais Anápolis";
		$cinema->address = "Av. Brasil, 505 - Parque São João, Anápolis - GO, 75070-050, Brazil";
		$cinema->state = "Goiás";
		$cinema->state_code = "GO";
		$cinema->city = "Anápolis";
		$cinema->lat = "-16.3703924";
		$cinema->long = "-48.9619865";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br";
	}

}
?>