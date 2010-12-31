<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_ribeirao_preto extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemark Ribeirão Preto";
		$cinema->address = "Av. Pres. Kennedy, 1500 - Subsetor Leste 6, Ribeirão Preto - São Paulo, 14095-220, Brazil";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Ribeirão Preto";
		$cinema->lat = "-21.2073616";
		$cinema->long = "-47.7697128";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br";
	}

}
?>