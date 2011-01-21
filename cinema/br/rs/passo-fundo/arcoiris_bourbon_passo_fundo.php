<?php 
//http://maps.googleapis.com/maps/api/geocode/json?address=Av. Brasil Leste, 200 - Centro Passo Fundo - RS, 99050-000, Brazil&sensor=false

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoiris_bourbon_passo_fundo extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d36236c8ad1a";
		$cinema->name = "Arcoiris Bourbon Passo Fundo";
		$cinema->address = "Av. Brasil Leste, 200 - Centro, Passo Fundo - Rio Grande do Sul, 99050-000, Brazil";
		$cinema->phone = "(0xx)54 3581-1920";
		$cinema->state = "Rio Grande do Sul";
		$cinema->state_code = "RS";
		$cinema->city = "Passo Fundo";
		$cinema->lat = "-28.2579835";
		$cinema->long = "-52.4019948";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "71587";
	}
	protected function get_id_cinema_do_site() {
		return "1052";
	}

}
?>