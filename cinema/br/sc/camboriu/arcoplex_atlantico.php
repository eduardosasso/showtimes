<?php 
//http://maps.googleapis.com/maps/api/geocode/json?address=Av. Brasil, 1271, Balneário Camboriú - SC, 88330-048, Brazil&sensor=false

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoplex_atlantico extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d35f41810e5e";
		$cinema->name = "Arcoplex Atlantico";
		$cinema->address = "Av. Brasil, 1271 Balneário Camboriú - SC, 88330-048, Brazil";
		$cinema->phone = "(0xx)47 3366-1580";
		$cinema->state = "Santa Catarina";
		$cinema->state_code = "SC";
		$cinema->city = "Camboriú";
		$cinema->lat = "-26.9854536";
		$cinema->long = "-48.6353475";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "75493";
	}
	protected function get_id_cinema_do_site() {
		return "1004";
	}

}
?>