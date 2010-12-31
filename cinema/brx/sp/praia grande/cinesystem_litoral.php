<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinesystem_litoral extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "CineSystem Litoral";
		$cinema->address = "Av. Ayrton Senna da Silva, 1511 - Sítio do Campo, Praia Grande - São Paulo, 11726-000, Brazil";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Praia Grande";
		$cinema->lat = "-23.9978807";
		$cinema->long = "-46.4111064";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Bertioga+SP&amp;tid=9c8548894dea3d32";
	}

}
?>