<?php 
//http://maps.googleapis.com/maps/api/geocode/json?address=R. Pres. Nereu Ramos, 303 Lages - SC, 88502-170, Brazil&sensor=false

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoiris_unicshopping extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d361993d4f84";
		$cinema->name = "Arcoiris UnicShopping";
		$cinema->address = "BR 386 Km 346 - Lajeado - Rio Grande do Sul, 95900-000, Brazil";
		$cinema->phone = "(0xx)51 3714-1002";
		$cinema->state = "Rio Grande do Sul";
		$cinema->state_code = "RS";
		$cinema->city = "Lajeado";
		$cinema->lat = "-29.44938";
		$cinema->long = "-51.968722";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "70408";
	}
	protected function get_id_cinema_do_site() {
		return "1032";
	}

}
?>