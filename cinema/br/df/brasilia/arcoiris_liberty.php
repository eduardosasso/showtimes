<?php 
//http://maps.googleapis.com/maps/api/geocode/json?address=Scn - Brasília DF, Brazil&sensor=false

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoiris_liberty extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d35ee84a4787";
		$cinema->name = "Arcoiris Liberty";
		$cinema->address = "Scn Quadra 2, Bloco D/289 - Brasília, Brazilian Federal District, Brazil";
		$cinema->phone = "(0xx)61 3326-1399";
		$cinema->state = "Distrito Federal";
		$cinema->state_code = "DF";
		$cinema->city = "Brasília";
		$cinema->lat = "-15.7895484";
		$cinema->long = "-47.8839745";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "15890";
	}
	protected function get_id_cinema_do_site() {
		return "1020";
	}

}
?>