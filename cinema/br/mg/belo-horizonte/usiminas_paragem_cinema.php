<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class usiminas_paragem_cinema extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "2ea8aaa4424a075c";
		$cinema->name = "USIMINAS Paragem Cinema";
		$cinema->address = "Av. Prof. Mário Werneck, 1360 - Buritis, Belo Horizonte - Minas Gerais, 30455-610, Brazil";
		$cinema->phone = "(0xx)31 2103-7933";
		$cinema->state = "Minas Gerais";
		$cinema->state_code = "MG";
		$cinema->city = "Belo Horizonte";
		$cinema->lat = "-19.9689137";
		$cinema->long = "-43.9648185";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Belo+Horizonte+MG&tid=2ea8aaa4424a075c";
	}

}
?>