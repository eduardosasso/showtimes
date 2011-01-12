<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoiris_boulevard extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d2da78f37b50";
		$cinema->name = "Arcoiris Boulevard";
		$cinema->address = "Av. Assis Brasil, 4320 - Sarandi, Porto Alegre - Rio Grande do Sul, 91110-001, Brazil";
		$cinema->phone = "(0xx)51 3344-1483";
		$cinema->state = "Rio Grande do Sul";
		$cinema->state_code = "RS";
		$cinema->city = "Porto Alegre";
		$cinema->lat = "-30.0051856";
		$cinema->long = "-51.1383541";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "71986";
	}
	protected function get_id_cinema_do_site() {
		return "1012";
	}

}
?>