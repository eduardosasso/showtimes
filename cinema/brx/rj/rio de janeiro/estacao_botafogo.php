<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class estacao_botafogo extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Estação Botafogo";
		$cinema->address = "R. Voluntários da Pátria, 88 - Botafogo, Rio de Janeiro, 22270-010, Brazil";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.9514334";
		$cinema->long = "-43.1846071";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Maric%C3%A1+RJ&amp;tid=47d50bd8439857f5";
	}

}
?>