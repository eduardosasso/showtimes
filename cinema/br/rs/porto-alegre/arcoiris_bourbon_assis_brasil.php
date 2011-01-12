<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoiris_bourbon_assis_brasil extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d2dff70e944a";
		$cinema->name = "Arcoiris Bourbon Assis Brasil";
		$cinema->address = "Av. Assis Brasil, 164 - São João, Porto Alegre - Rio Grande do Sul, 91010-000, Brazil";
		$cinema->phone = "(0xx)51 3362-3608";
		$cinema->state = "Rio Grande do Sul";
		$cinema->state_code = "RS";
		$cinema->city = "Porto Alegre";
		$cinema->lat = "-30.0079881";
		$cinema->long = "-51.1842274";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "71986";
	}
	protected function get_id_cinema_do_site() {
		return "1050";
	}

}
?>