<?php 
//http://maps.googleapis.com/maps/api/geocode/json?address=R. Siqueira Campos, 1545 Pres. Prudente - São Paulo, 19013-030, Brazil&sensor=false

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoiris_prudente_parque_shopping extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d3625c15d43d";
		$cinema->name = "Arcoiris Prudente Parque Shopping";
		$cinema->address = "R. Siqueira Campos, 1545 - Presidente Prudente - São Paulo, 19013-030, Brazil";
		$cinema->phone = "(0xx)18 3221-2443";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Presidente Prudente";
		$cinema->lat = "-22.1209808";
		$cinema->long = "-51.3853839";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "87041";
	}
	protected function get_id_cinema_do_site() {
		return "1026";
	}

}
?>