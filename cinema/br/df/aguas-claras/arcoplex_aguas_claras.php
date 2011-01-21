<?php 
//http://maps.googleapis.com/maps/api/geocode/json?address=Avenida das Araucárias, lotes 1835 a, 2005 Águas Claras - DF, 71936-250, Brasil&sensor=false

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoplex_aguas_claras extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d35f6bdf3506";
		$cinema->name = "Arcoplex Aguas Claras";
		$cinema->address = "Av. das Araucárias s/n lt 1835, 1905, Brasília - DF, 71936-250, Brazil";
		$cinema->phone = "(0xx)61 3034-3107";
		$cinema->state = "Distrito Federal";
		$cinema->state_code = "DF";
		$cinema->city = "Aguas Claras";
		$cinema->lat = "-15.8392495";
		$cinema->long = "-48.0251876";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "10000";
	}
	protected function get_id_cinema_do_site() {
		return "1046";
	}

}
?>