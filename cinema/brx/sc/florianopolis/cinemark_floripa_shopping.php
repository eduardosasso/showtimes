<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_floripa_shopping extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "d64242d4edd2d265";
		$cinema->name = "Cinemark Floripa Shopping";
		$cinema->address = "Rod. Virgílio Várzea, 587 - Saco Grande, Florianopolis - Santa Catarina, 88054-605, Brazil";
		$cinema->state = "Santa Catarina";
		$cinema->state_code = "SC";
		$cinema->city = "Florianopolis";
		$cinema->lat = "-27.5545947";
		$cinema->long = "-48.4970673";

		return $cinema;			
	}

	public function get_url() {
		return "http://www.google.com.br/movies?near=florianopolis&tid=d64242d4edd2d265";
	}

}
?>