<?php 
//http://maps.googleapis.com/maps/api/geocode/json?address=Av. Conde Francisco Matarazzo Júnior, 205 - Vila Horto Florestal Rio Claro - São Paulo, 13506-845, Brazil&sensor=false

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoplex_rio_claro extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d36274a3278d";
		$cinema->name = "Arcoplex Rio Claro";
		$cinema->address = "Av. Conde Francisco Matarazzo Júnior, 205 - Vila Horto Florestal, Rio Claro - São Paulo, 13506-845, Brazil";
		$cinema->phone = "(0xx)19 3534-7213";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Rio Claro";
		$cinema->lat = "-22.412573";
		$cinema->long = "-47.5550799";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "87386";
	}
	protected function get_id_cinema_do_site() {
		return "1022";
	}

}
?>