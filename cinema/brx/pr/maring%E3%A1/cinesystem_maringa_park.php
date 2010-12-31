<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinesystem_maringa_park extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "CineSystem Maringá Park";
		$cinema->address = "Av. São Paulo, 120 - Zona 01, Maringá - Paraná, 87013-040, Brazil";
		$cinema->state = "Parana";
		$cinema->state_code = "PR";
		$cinema->city = "Maringá";
		$cinema->lat = "-23.4226742";
		$cinema->long = "-51.932972";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=%C3%82ngulo+PR&amp;tid=73f3e7aa2569c7ce";
	}

}
?>