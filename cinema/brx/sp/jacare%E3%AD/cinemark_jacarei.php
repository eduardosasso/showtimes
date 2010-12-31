<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_jacarei extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemark Jacarei";
		$cinema->address = "R. Barão de Jacareí, 364 - Jacareí - São Paulo, 12308-001, Brazil";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Jacareí";
		$cinema->lat = "-23.306027";
		$cinema->long = "-45.967448";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Biritiba-Mirim+SP&amp;tid=8798b1c96c7617d3";
	}

}
?>