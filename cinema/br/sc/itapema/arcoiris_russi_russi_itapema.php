<?php 
//http://maps.googleapis.com/maps/api/geocode/json?address=Av. Nereu Ramos, 3977 Itapema - SC, 88220-000, Brazil&sensor=false

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoiris_russi_russi_itapema extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d36157d2f4b1";
		$cinema->name = "Arcoiris Russi Russi Itapema";
		$cinema->address = "Av. Nereu Ramos, 3977 - Itapema - Santa Catarina, 88220-000, Brazil";
		$cinema->phone = "(0xx)47 3098-5044";
		$cinema->state = "Santa Catarina";
		$cinema->state_code = "SC";
		$cinema->city = "Itapema";
		$cinema->lat = "-27.1286118";
		$cinema->long = "-48.6015347";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "77003";
	}
	protected function get_id_cinema_do_site() {
		return "1039";
	}

}
?>