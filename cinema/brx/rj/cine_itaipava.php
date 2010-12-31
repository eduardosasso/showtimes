<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_itaipava extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cine Itaipava";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "RJ";
		$cinema->city = "";
		$cinema->lat = "";
		$cinema->long = "";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Areal+RJ&amp;tid=ebfc6ca1af9a9617";
	}

}
?>