<?php 
//http://maps.googleapis.com/maps/api/geocode/json?address=Av. Dom Luiz, 500 - Aldeota Fortaleza - CE, 60160-230, Brazil&sensor=false

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoplex_patio_dom_luis extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d360c80a8c70";
		$cinema->name = "Arcoplex Patio Dom Luis";
		$cinema->address = "Av. Dom Luiz, 500 - Aldeota, Fortaleza - Ceará, 60160-230, Brazil";
		$cinema->phone = "(0xx)85 3458-1710";
		$cinema->state = "Ceara";
		$cinema->state_code = "CE";
		$cinema->city = "Fortaleza";
		$cinema->lat = "-3.7336877";
		$cinema->long = "-38.496347";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "12149";
	}
	protected function get_id_cinema_do_site() {
		return "1056";
	}

}
?>