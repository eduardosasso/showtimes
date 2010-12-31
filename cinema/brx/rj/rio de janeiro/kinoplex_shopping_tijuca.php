<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class kinoplex_shopping_tijuca extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Kinoplex Shopping Tijuca";
		$cinema->address = "Av. Maracanã, 987 - Andaraí, Rio de Janeiro, 20511-000, Brazil";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.9225474";
		$cinema->long = "-43.2358792";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Duque+de+Caxias+RJ&amp;tid=de2efde56ade8cfa";
	}

}
?>