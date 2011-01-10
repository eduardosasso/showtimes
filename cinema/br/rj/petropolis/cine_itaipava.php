<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_itaipava extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "ebfc6ca1af9a9617";
		$cinema->name = "Cine Itaipava";
		$cinema->address = "Estr. União E Indústria, 11000 - Petrópolis - Rio de Janeiro, Brazil";
		$cinema->phone = "(0xx)24 2222-3424";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Petrópolis";
		$cinema->lat = "-22.3947175";
		$cinema->long = "-43.1323631";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Areal+RJ&tid=ebfc6ca1af9a9617";
	}

}
?>