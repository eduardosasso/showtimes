<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class kinoplex_grande_rio extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "d53fa6b373c44fda";
		$cinema->name = "Kinoplex Grande Rio";
		$cinema->address = "Rod. Pres. Dutra, 4200 - Rocha Sobradinho, Mesquita - Rio de Janeiro, Brazil";
		$cinema->phone = "";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Mesquita";
		$cinema->lat = "-22.7670536";
		$cinema->long = "-43.4123669";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Belford+Roxo+RJ&tid=d53fa6b373c44fda";
	}

}
?>