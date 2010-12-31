<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class usiminas_paragem_cinema extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "USIMINAS Paragem Cinema";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "MG";
		$cinema->city = "";
		$cinema->lat = "";
		$cinema->long = "";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Belo+Horizonte+MG&amp;tid=2ea8aaa4424a075c";
	}

}
?>