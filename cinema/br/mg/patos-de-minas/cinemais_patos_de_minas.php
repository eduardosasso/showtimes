<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemais_patos_de_minas extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "7da2a1477180faec";
		$cinema->name = "Cinemais Patos de Minas";
		$cinema->address = "R. Maj. Gote, 1901 - Patos de Minas - Minas Gerais, 38700-001, Brazil";
		$cinema->phone = "";
		$cinema->state = "Minas Gerais";
		$cinema->state_code = "MG";
		$cinema->city = "Patos de Minas";
		$cinema->lat = "-18.5883447";
		$cinema->long = "-46.5151084";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Guimar%C3%A2nia+MG&tid=7da2a1477180faec";
	}

}
?>