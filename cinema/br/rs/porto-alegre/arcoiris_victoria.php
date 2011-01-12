<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoiris_victoria extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d2dff9430512";
		$cinema->name = "Arcoiris Victória";
		$cinema->address = "Av. Borges de Medeiros, 475 - Centro, Porto Alegre - Rio Grande do Sul, Brazil";
		$cinema->phone = "(0xx)51 3212-3474";
		$cinema->state = "Rio Grande do Sul";
		$cinema->state_code = "RS";
		$cinema->city = "Porto Alegre";
		$cinema->lat = "-30.0286526";
		$cinema->long = "-51.2280461";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "71986";
	}
	protected function get_id_cinema_do_site() {
		return "1048";
	}

}
?>