<?php 
//http://maps.googleapis.com/maps/api/geocode/json?address=R. Gerôncio Thives, 1079 São José - SC, 88117-292, Brazil&sensor=false

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoplex_itaguacu extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d362c1930466";
		$cinema->name = "Arcoplex Itaguaçu";
		$cinema->address = "R. Gerôncio Thives, 1079 - São José - Santa Catarina, 88117-292, Brazil";
		$cinema->phone = "(0xx)48 3246-0744";
		$cinema->state = "Santa Catarina";
		$cinema->state_code = "SC";
		$cinema->city = "São José";
		$cinema->lat = "-27.5868256";
		$cinema->long = "-48.6080231";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "78700";
	}
	protected function get_id_cinema_do_site() {
		return "1003";
	}

}
?>