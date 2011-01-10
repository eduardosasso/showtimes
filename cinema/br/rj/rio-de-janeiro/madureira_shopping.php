<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class madureira_shopping extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "97a109e3fbee4bb";
		$cinema->name = "Madureira Shopping";
		$cinema->address = "Estr. do Portela, 222 - Madureira, Rio de Janeiro, 21351-050, Brazil";
		$cinema->phone = "(0xx)21 2461-2461";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.8706272";
		$cinema->long = "-43.3418129";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Belford+Roxo+RJ&tid=97a109e3fbee4bb";
	}

}
?>