<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class espaco_de_cinema extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "c7c87a40c4073d90";
		$cinema->name = "Espaço de Cinema";
		$cinema->address = "R. Voluntários da Pátria, 35 - Botafogo, Rio de Janeiro, 22270-000, Brazil";
		$cinema->phone = "";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.9507716";
		$cinema->long = "-43.1827056";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Itabora%C3%AD+RJ&tid=c7c87a40c4073d90";
	}

}
?>