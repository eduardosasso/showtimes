<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_livraria_cultura extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "ddcd71a894753633";
		$cinema->name = "Cine Livraria Cultura";
		$cinema->address = "Av. Paulista, 2073 - Consolação, Sao Paulo - São Paulo, 01311-300, Brazil";
		$cinema->phone = "";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5587724";
		$cinema->long = "-46.6600433";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Mairipor%C3%A3+SP&tid=ddcd71a894753633";
	}

}
?>