<?php 
//http://maps.googleapis.com/maps/api/geocode/json?address=Palhoça - SC, 88132-902, Brazil&sensor=false

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoplex_via_catarina extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d361e34b67e0";
		$cinema->name = "Arcoplex Via Catarina";
		$cinema->address = "Avenida Atílio Pedro Pagani, 270, Passa Vinte Palhoça - SC, 88132-902, Brazil";
		$cinema->phone = "(0xx)48 3086-9500";
		$cinema->state = "Santa Catarina";
		$cinema->state_code = "SC";
		$cinema->city = "Palhoça";
		$cinema->lat = "-27.6532989";
		$cinema->long = "-48.6790006";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "77755";
	}
	protected function get_id_cinema_do_site() {
		return "1055";
	}

}
?>