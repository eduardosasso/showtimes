<?php 
//http://maps.googleapis.com/maps/api/geocode/json?address=Criciúma - SC, 88801-505, Brazil&sensor=false

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoiris_della extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d3607118f1cf";
		$cinema->name = "Arcoiris Della";
		$cinema->address = "Praça Doutor Nereu Ramos, 364 - Loja 55 - 3ºandar Criciúma - SC, 88801-505, Brazil";
		$cinema->phone = "(0xx)48 3433-2475";
		$cinema->state = "Santa Catarina";
		$cinema->state_code = "SC";
		$cinema->city = "Criciúma";
		$cinema->lat = "-28.6786013";
		$cinema->long = "-49.3780082";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "76180";
	}
	protected function get_id_cinema_do_site() {
		return "1010";
	}

}
?>