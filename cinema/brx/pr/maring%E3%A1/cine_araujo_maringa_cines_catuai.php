<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_araujo_maringa_cines_catuai extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cine Araújo Maringá - Cines Catuaí";
		$cinema->address = "Av. Colombo, 9537 - Zona 43, Maringá - Paraná, 87070-000, Brazil";
		$cinema->state = "Parana";
		$cinema->state_code = "PR";
		$cinema->city = "Maringá";
		$cinema->lat = "-23.4188977";
		$cinema->long = "-51.9703727";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=%C3%82ngulo+PR&amp;tid=1b2e68cfff1cd14d";
	}

}
?>