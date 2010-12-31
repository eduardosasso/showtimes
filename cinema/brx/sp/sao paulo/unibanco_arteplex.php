<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class unibanco_arteplex extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Unibanco Arteplex";
		$cinema->address = "R. Frei Caneca, 569 - Consolação, Sao Paulo - São Paulo, 01307-001, Brazil";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.553483";
		$cinema->long = "-46.6527548";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Guarulhos+SP&amp;tid=88a13d3944f3ca8";
	}

}
?>