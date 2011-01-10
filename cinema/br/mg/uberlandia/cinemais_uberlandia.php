<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemais_uberlandia extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "e8c9509bc7c290fd";
		$cinema->name = "Cinemais Uberlandia";
		$cinema->address = "Av. João Naves de Ávila, 1331 - Ns. Aparecida, Uberlândia - Minas Gerais, 38408-100, Brazil";
		$cinema->phone = "";
		$cinema->state = "Minas Gerais";
		$cinema->state_code = "MG";
		$cinema->city = "Uberlândia";
		$cinema->lat = "-18.9112506";
		$cinema->long = "-48.2624185";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Araguari+MG&tid=e8c9509bc7c290fd";
	}

}
?>