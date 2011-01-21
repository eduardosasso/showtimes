<?php 
//http://maps.googleapis.com/maps/api/geocode/json?address=R. Mal. Deodoro da Fonseca - D, 106 - Centro Chapecó - SC, 89801-060, Brazil&sensor=false

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoplex_mercocentro extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d35ff767c2dc";
		$cinema->name = "Arcoplex MercoCentro";
		$cinema->address = "R. Mal. Deodoro da Fonseca - D, 106 - Centro, Chapecó - Santa Catarina, 89801-060, Brazil";
		$cinema->phone = "(0xx)49 3322-2640";
		$cinema->state = "Santa Catarina";
		$cinema->state_code = "SC";
		$cinema->city = "Chapecó";
		$cinema->lat = "-27.1002627";
		$cinema->long = "-52.6143347";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "76066";
	}
	protected function get_id_cinema_do_site() {
		return "1035";
	}

}
?>