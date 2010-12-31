<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_araujo_maringa_cines_avenida extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cine Araújo Maringá - Cines Avenida";
		$cinema->address = "Av. São Paulo, 458 - Zona 09, Maringá - Paraná, 87013-040, Brazil";
		$cinema->state = "Parana";
		$cinema->state_code = "PR";
		$cinema->city = "Maringá";
		$cinema->lat = "-23.4195436";
		$cinema->long = "-51.9329361";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=%C3%82ngulo+PR&amp;tid=9cef7d585da25adb";
	}

}
?>