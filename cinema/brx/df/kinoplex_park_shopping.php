<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class kinoplex_park_shopping extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Kinoplex Park Shopping";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "DF";
		$cinema->city = "";
		$cinema->lat = "";
		$cinema->long = "";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Bras%C3%ADlia+DF&amp;tid=43441915acf2e79d";
	}

}
?>