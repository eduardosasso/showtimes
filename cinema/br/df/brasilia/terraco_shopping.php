<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class terraco_shopping extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "dc04db7f68f10da3";
		$cinema->name = "Terraço Shopping";
		$cinema->address = "SHC Entrequadras, 2/8 - Cruzeiro, Brasília - Brazilian Federal District, 70660-000, Brazil";
		$cinema->phone = "(0xx)61 3223-1617";
		$cinema->state = "Distrito Federal";
		$cinema->state_code = "DF";
		$cinema->city = "Brasília";
		$cinema->lat = "-15.8089";
		$cinema->long = "-47.94";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Bras%C3%ADlia+DF&tid=dc04db7f68f10da3";
	}

}
?>