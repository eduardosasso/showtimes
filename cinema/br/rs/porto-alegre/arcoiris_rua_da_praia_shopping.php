<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoiris_rua_da_praia_shopping extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d2dff860f140";
		$cinema->name = "Arcoiris Rua da Praia Shopping";
		$cinema->address = "R. dos Andradas, 1001 - Centro, Porto Alegre - Rio Grande do Sul, 90020-007, Brazil";
		$cinema->phone = "(0xx)51 3286-7701";
		$cinema->state = "Rio Grande do Sul";
		$cinema->state_code = "RS";
		$cinema->city = "Porto Alegre";
		$cinema->lat = "-30.030586";
		$cinema->long = "-51.2318542";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "71986";
	}
	protected function get_id_cinema_do_site() {
		return "1045";
	}

}
?>