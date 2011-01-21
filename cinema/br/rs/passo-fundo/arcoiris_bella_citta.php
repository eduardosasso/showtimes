<?php 
//http://maps.googleapis.com/maps/api/geocode/json?address=R. Cel. Chicuta, 355 - Centro Passo Fundo - RS, 99010-050, Brazil&sensor=false

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoiris_bella_citta extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d362204edc31";
		$cinema->name = "Arcoiris Bella Citta";
		$cinema->address = "R. Cel. Chicuta, 355 - Centro, Passo Fundo - Rio Grande do Sul, 99010-050, Brazil";
		$cinema->phone = "(0xx)54 3317-2813";
		$cinema->state = "Rio Grande do Sul";
		$cinema->state_code = "RS";
		$cinema->city = "Passo Fundo";
		$cinema->lat = "-28.262467";
		$cinema->long = "-52.4089628";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "71587";
	}
	protected function get_id_cinema_do_site() {
		return "1051";
	}

}
?>