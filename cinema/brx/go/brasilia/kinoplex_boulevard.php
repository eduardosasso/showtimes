<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class kinoplex_boulevard extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Kinoplex Boulevard";
		$cinema->address = "Stn - Brasília, Brazilian Federal District, 70770-100, Brazil";
		$cinema->state = "Distrito Federal";
		$cinema->state_code = "GO";
		$cinema->city = "Brasilia";
		$cinema->lat = "-15.7365981";
		$cinema->long = "-47.9065885";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=%C3%81guas+Lindas+de+Goi%C3%A1s+GO&amp;tid=be77be8c4693b114";
	}

}
?>