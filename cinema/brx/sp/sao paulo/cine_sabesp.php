<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_sabesp extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cine Sabesp";
		$cinema->address = "R. Fradique Coutinho, 361 - Pinheiros, Sao Paulo - São Paulo, 05416-010, Brazil";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5634913";
		$cinema->long = "-46.6863378";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Barueri+SP&amp;tid=323cb732031bd346";
	}

}
?>