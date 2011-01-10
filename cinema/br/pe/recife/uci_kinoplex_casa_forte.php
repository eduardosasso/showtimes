<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class uci_kinoplex_casa_forte extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "d260f423a65fa106";
		$cinema->name = "UCI Kinoplex Casa Forte";
		$cinema->address = "R. Dr. João Santos Filho, 255 - Paranamirim, Recife Antigo - Pernambuco, 52060-615, Brazil";
		$cinema->phone = "(0xx)81 2141-9100";
		$cinema->state = "Pernambuco";
		$cinema->state_code = "PE";
		$cinema->city = "Recife";
		$cinema->lat = "-8.0378736";
		$cinema->long = "-34.9109335";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Abreu+e+Lima+PE&tid=d260f423a65fa106";
	}

}
?>