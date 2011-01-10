<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class uci_tacaruna extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "1232c11c8acdd74a";
		$cinema->name = "UCI Tacaruna";
		$cinema->address = "Av. Governador Agamenon Magalhães - Santo Amaro, Recife Antigo - Pernambuco, 50100-010, Brazil";
		$cinema->phone = "(0xx)81 3087-3535";
		$cinema->state = "Pernambuco";
		$cinema->state_code = "PE";
		$cinema->city = "Recife";
		$cinema->lat = "-8.0385492";
		$cinema->long = "-34.8761086";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Abreu+e+Lima+PE&tid=1232c11c8acdd74a";
	}

}
?>