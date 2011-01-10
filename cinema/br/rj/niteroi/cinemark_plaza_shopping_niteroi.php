<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_plaza_shopping_niteroi extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "3094b5588c38dee5";
		$cinema->name = "Cinemark Plaza Shopping Niterói";
		$cinema->address = "R. Quinze de Novembro, 8 - Morro do Estado, Niterói - Rio de Janeiro, 24020-125, Brazil";
		$cinema->phone = "(0xx)21 2722-3826";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Niteroi";
		$cinema->lat = "-22.8959818";
		$cinema->long = "-43.1240936";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Itabora%C3%AD+RJ&tid=3094b5588c38dee5";
	}

}
?>