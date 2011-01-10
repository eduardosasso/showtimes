<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemais_anapolis extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "620d8ba95da1fbd7";
		$cinema->name = "Cinemais Anápolis";
		$cinema->address = "Av. Brasil, 505 - Parque São João, Anápolis - GO, 75070-050, Brazil";
		$cinema->phone = "";
		$cinema->state = "Goiás";
		$cinema->state_code = "GO";
		$cinema->city = "Anápolis";
		$cinema->lat = "-16.3703924";
		$cinema->long = "-48.9619865";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Abadi%C3%A2nia+GO&tid=620d8ba95da1fbd7";
	}

}
?>