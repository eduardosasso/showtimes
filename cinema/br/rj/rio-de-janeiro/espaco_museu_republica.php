<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class espaco_museu_republica extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "abb8400fa83c4186";
		$cinema->name = "Espaço Museu Republica";
		$cinema->address = "R. do Catete, 153 - Flamengo, Rio de Janeiro, 22220-000, Brazil";
		$cinema->phone = "(0xx)21 3826-7984";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.9260108";
		$cinema->long = "-43.1765685";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Itabora%C3%AD+RJ&tid=abb8400fa83c4186";
	}

}
?>