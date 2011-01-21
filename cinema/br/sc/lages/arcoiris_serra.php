<?php 
//http://maps.googleapis.com/maps/api/geocode/json?address=R. Pres. Nereu Ramos, 303 Lages - SC, 88502-170, Brazil&sensor=false

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoiris_serra extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d361858635de";
		$cinema->name = "Arcoiris Serra";
		$cinema->address = "R. Pres. Nereu Ramos, 303 - Lages - Santa Catarina, 88502-170, Brazil";
		$cinema->phone = "(0xx)49 3222-3780";
		$cinema->state = "Santa Catarina";
		$cinema->state_code = "SC";
		$cinema->city = "Lages";
		$cinema->lat = "-27.8140176";
		$cinema->long = "-50.327198";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "77178";
	}
	protected function get_id_cinema_do_site() {
		return "1025";
	}

}
?>