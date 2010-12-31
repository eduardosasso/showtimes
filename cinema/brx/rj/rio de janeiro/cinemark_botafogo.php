<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_botafogo extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemark Botafogo";
		$cinema->address = "Praia de Botafogo, 400 - Botafogo, Rio de Janeiro, 22250-040, Brazil";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.9475208";
		$cinema->long = "-43.1827546";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Itabora%C3%AD+RJ&amp;tid=14d95a0ab8e69241";
	}

}
?>