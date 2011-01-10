<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_salvador extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "6732fc99d44c68fd";
		$cinema->name = "Cinemark Salvador";
		$cinema->address = "Av. Tancredo Neves, 2915 - Caminho das Árvore, Salvador - Bahia, 41820-021, Brazil";
		$cinema->phone = "(0xx)71 3443-1870";
		$cinema->state = "Bahia";
		$cinema->state_code = "BA";
		$cinema->city = "Salvador";
		$cinema->lat = "-12.9755255";
		$cinema->long = "-38.4579834";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Cama%C3%A7ari+BA&tid=6732fc99d44c68fd";
	}

}
?>