<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_jacarei extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "8798b1c96c7617d3";
		$cinema->name = "Cinemark Jacarei";
		$cinema->address = "R. Barão de Jacareí, 364 - Jacareí - São Paulo, 12308-001, Brazil";
		$cinema->phone = "(0xx)12 3954-8501";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Jacareí";
		$cinema->lat = "-23.306027";
		$cinema->long = "-45.967448";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Aruj%C3%A1+SP&tid=8798b1c96c7617d3";
	}

}
?>