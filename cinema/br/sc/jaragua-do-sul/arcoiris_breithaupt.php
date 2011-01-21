<?php 
//http://maps.googleapis.com/maps/api/geocode/json?address=Av. Getúlio Vargas, 268 - Centro Jaraguá do Sul - SC, 89251-000, Brazil&sensor=false

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoiris_breithaupt extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d3616bee6e79";
		$cinema->name = "Arcoiris Breithaupt";
		$cinema->address = "Av. Getúlio Vargas, 268 - Centro, Jaraguá do Sul - Santa Catarina, 89251-000, Brazil";
		$cinema->phone = "(0xx)47 3275-0272";
		$cinema->state = "Santa Catarina";
		$cinema->state_code = "SC";
		$cinema->city = "Jaraguá do Sul";
		$cinema->lat = "-26.4804335";
		$cinema->long = "-49.0852867";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "77097";
	}
	protected function get_id_cinema_do_site() {
		return "1047";
	}

}
?>