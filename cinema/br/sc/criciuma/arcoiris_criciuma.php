<?php 
//http://maps.googleapis.com/maps/api/geocode/json?address=R. Chile, 1455 Criciúma - SC, 88815-060, Brazil&sensor=false

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoiris_criciuma extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d36066e0a77e";
		$cinema->name = "Arcoiris Criciuma";
		$cinema->address = "R. Chile, 1455 - Criciúma - Santa Catarina, 88815-060, Brazil";
		$cinema->phone = "(0xx)48 3431-8057";
		$cinema->state = "Santa Catarina";
		$cinema->state_code = "SC";
		$cinema->city = "Criciúma";
		$cinema->lat = "-28.6843245";
		$cinema->long = "-49.3458586";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "76180";
	}
	protected function get_id_cinema_do_site() {
		return "1008";
	}

}
?>