<?php 
//http://maps.googleapis.com/maps/api/geocode/json?address=R. Toledo, 432 - Periolo Cascavel - PR, 85817-390, Brazil&sensor=false

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoplex_cascavel extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d35fc9a957fb";
		$cinema->name = "Arcoplex Cascavel";
		$cinema->address = "R. Toledo, 432 - Periolo, Cascavel - Paraná, 85817-390, Brazil";
		$cinema->phone = "(0xx)45 3226-3322";
		$cinema->state = "Parana";
		$cinema->state_code = "PR";
		$cinema->city = "Cascavel";
		$cinema->lat = "-24.9507849";
		$cinema->long = "-53.4153934";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "54879";
	}
	protected function get_id_cinema_do_site() {
		return "1040";
	}

}
?>