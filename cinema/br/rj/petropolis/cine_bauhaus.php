<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_bauhaus extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "715554ab34db6d74";
		$cinema->name = "Cine Bauhaus";
		$cinema->address = "R. Dr. Nélson de Sá Earp, 88 - Petrópolis - Rio de Janeiro, 25680-195, Brazil";
		$cinema->phone = "";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Petrópolis";
		$cinema->lat = "-22.511654";
		$cinema->long = "-43.1801455";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Areal+RJ&tid=715554ab34db6d74";
	}

}
?>