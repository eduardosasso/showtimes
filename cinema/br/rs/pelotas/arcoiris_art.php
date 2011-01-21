<?php 
//http://maps.googleapis.com/maps/api/geocode/json?address=R. Andrade Neves, 1934 Pelotas - RS, 96020-080, Brazil&sensor=false

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoiris_art extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d36247497670";
		$cinema->name = "Arcoiris Art";
		$cinema->address = "R. Andrade Neves, 1934 - Pelotas - Rio Grande do Sul, 96020-080, Brazil";
		$cinema->phone = "(0xx)53 3229-3340";
		$cinema->state = "Rio Grande do Sul";
		$cinema->state_code = "RS";
		$cinema->city = "Pelotas";
		$cinema->lat = "-31.7630402";
		$cinema->long = "-52.340146";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "71706";
	}
	protected function get_id_cinema_do_site() {
		return "1023";
	}

}
?>