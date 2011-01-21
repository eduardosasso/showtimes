<?php 
//http://maps.googleapis.com/maps/api/geocode/json?address=Av. Ns. das Dores, 305 Santa Maria - RS, 97050-531, Brazil&sensor=false

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoplex_royal_plaza extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d362ae272a71";
		$cinema->name = "Arcoplex Royal Plaza";
		$cinema->address = "Av. Ns. das Dores, 305 - Santa Maria - Rio Grande do Sul, 97050-531, Brazil";
		$cinema->phone = "(0xx)55 3028-8844";
		$cinema->state = "Rio Grande do Sul";
		$cinema->state_code = "RS";
		$cinema->city = "Santa Maria";
		$cinema->lat = "-29.6898593";
		$cinema->long = "-53.7974225";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "72907";
	}
	protected function get_id_cinema_do_site() {
		return "1054";
	}

}
?>