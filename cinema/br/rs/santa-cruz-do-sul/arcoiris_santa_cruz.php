<?php 
//http://maps.googleapis.com/maps/api/geocode/json?address=Av. Sen. Pasqualini, 18 - Verena Santa Cruz do Sul - RS, 09682-050, Brazil&sensor=false

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoiris_santa_cruz extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d36289b834c2";
		$cinema->name = "Arcoiris Santa Cruz";
		$cinema->address = "Av. Sen. Pasqualini, 18 - Verena, Santa Cruz do Sul - Rio Grande do Sul, 09682-050, Brazil";
		$cinema->phone = "(0xx)51 3715-9514";
		$cinema->state = "Rio Grande do Sul";
		$cinema->state_code = "RS";
		$cinema->city = "Santa Cruz do Sul";
		$cinema->lat = "-29.7057558";
		$cinema->long = "-52.4292851";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "72842";
	}
	protected function get_id_cinema_do_site() {
		return "1015";
	}

}
?>