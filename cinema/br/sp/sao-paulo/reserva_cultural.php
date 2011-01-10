<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class reserva_cultural extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "b439fed620fbd4db";
		$cinema->name = "Reserva Cultural";
		$cinema->address = "Av. Paulista, 900 - Bela Vista, Sao Paulo - São Paulo, 01310-100, Brazil";
		$cinema->phone = "(0xx)11 3251-2945";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5655975";
		$cinema->long = "-46.6512548";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Diadema+SP&tid=b439fed620fbd4db";
	}

}
?>