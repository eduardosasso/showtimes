<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cineplex_diamond_mall extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cineplex Diamond Mall";
		$cinema->address = "Av. Olegário Maciel, 1600 - Santo Agostinho, Belo Horizonte - Minas Gerais, 30180-110, Brazil";
		$cinema->state = "Minas Gerais";
		$cinema->state_code = "MG";
		$cinema->city = "Belo Horizonte";
		$cinema->lat = "-19.927629";
		$cinema->long = "-43.9465735";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Belo+Horizonte+MG&amp;tid=802bb75df95d31cf";
	}

}
?>