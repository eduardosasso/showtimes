<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cineplex_bh_shopping extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "782f94df8e82ab37";
		$cinema->name = "Cineplex BH Shopping";
		$cinema->address = "Acesso para Rodovia BR-356 - Santa Lúcia, Belo Horizonte - Minas Gerais, Brazil";
		$cinema->phone = "(0xx)31 3286-6754";
		$cinema->state = "Minas Gerais";
		$cinema->state_code = "MG";
		$cinema->city = "Belo Horizonte";
		$cinema->lat = "-19.9769603";
		$cinema->long = "-43.947686";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Belo+Horizonte+MG&tid=782f94df8e82ab37";
	}

}
?>