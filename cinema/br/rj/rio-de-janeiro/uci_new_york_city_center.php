<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class uci_new_york_city_center extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "2591809124afc207";
		$cinema->name = "UCI New York City Center";
		$cinema->address = "Av. das Américas, 5000 - Barra da Tijuca, Rio de Janeiro, 22640-102, Brazil";
		$cinema->phone = "(0xx)21 3478-6666";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.9994111";
		$cinema->long = "-43.3609924";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Nil%C3%B3polis+RJ&tid=2591809124afc207";
	}

}
?>