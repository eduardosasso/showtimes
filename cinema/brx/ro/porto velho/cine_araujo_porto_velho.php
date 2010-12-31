<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_araujo_porto_velho extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cine Araújo Porto Velho";
		$cinema->address = "Av. Rio Madeira, 3288 - Clodoaldo P Pinto, Porto Velho - RO, 78905-450, Brazil";
		$cinema->state = "Rondônia";
		$cinema->state_code = "RO";
		$cinema->city = "Porto Velho";
		$cinema->lat = "-8.7470389";
		$cinema->long = "-63.8773448";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br";
	}

}
?>