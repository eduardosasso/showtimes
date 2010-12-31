<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinesystem_bangu_rio_de_janeiro extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinesystem Bangu - Rio de Janeiro";
		$cinema->address = "R. Fonseca, 240 - Bangu, Rio de Janeiro, 21820-005, Brazil";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.8755465";
		$cinema->long = "-43.4655997";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Belford+Roxo+RJ&amp;tid=2054e7112b8aab50";
	}

}
?>