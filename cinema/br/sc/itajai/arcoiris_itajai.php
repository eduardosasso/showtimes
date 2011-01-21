<?php 
//http://maps.googleapis.com/maps/api/geocode/json?address=R. Samuel Heusi, 234 Itajaí - SC, 88301-320, Brazil&sensor=false

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoiris_itajai extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d360e30ac1eb";
		$cinema->name = "Arcoiris Itajai";
		$cinema->address = "R. Samuel Heusi, 234 - Itajaí - Santa Catarina, 88301-320, Brazil";
		$cinema->phone = "(0xx)47 3348-0971";
		$cinema->state = "Santa Catarina";
		$cinema->state_code = "SC";
		$cinema->city = "Itajaí";
		$cinema->lat = "-26.9041481";
		$cinema->long = "-48.6595981";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "76970";
	}
	protected function get_id_cinema_do_site() {
		return "1005";
	}

}
?>