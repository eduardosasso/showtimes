<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class kinoplex_park_shopping extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "43441915acf2e79d";
		$cinema->name = "Kinoplex Park Shopping";
		$cinema->address = "SAI/SO Área 6580 CCCV 71219-900 Brasília - Brazilian Federal District, Brazil";
		$cinema->phone = "(0xx)61 3223-1617";
		$cinema->state = "Distrito Federal";
		$cinema->state_code = "DF";
		$cinema->city = "Brasília";
		$cinema->lat = "-15.7801482";
		$cinema->long = "-47.9291698";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Bras%C3%ADlia+DF&tid=43441915acf2e79d";
	}

}
?>