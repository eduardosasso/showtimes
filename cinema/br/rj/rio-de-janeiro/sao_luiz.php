<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class sao_luiz extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "947ed7d89307a474";
		$cinema->name = "São Luiz";
		$cinema->address = "R. do Catete, 311 - Flamengo, Rio de Janeiro, 22220-000, Brazil";
		$cinema->phone = "(0xx)21 2461-2461";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.9309134";
		$cinema->long = "-43.1775471";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Itabora%C3%AD+RJ&tid=947ed7d89307a474";
	}

}
?>