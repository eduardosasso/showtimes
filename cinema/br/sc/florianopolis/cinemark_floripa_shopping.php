<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_floripa_shopping extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "d64242d4edd2d265";
		$cinema->name = "Cinemark Floripa Shopping";
		$cinema->address = "Rod. Virgílio Várzea, 587 - Saco Grande, Florianopolis - Santa Catarina, 88054-605, Brazil";
		$cinema->phone = "(0xx)48 3234-3678";
		$cinema->state = "Santa Catarina";
		$cinema->state_code = "SC";
		$cinema->city = "Florianopolis";
		$cinema->lat = "-27.5545947";
		$cinema->long = "-48.4970673";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "24";
	}
	protected function get_id_cinema_do_site() {
		return "703";
	}

}
?>