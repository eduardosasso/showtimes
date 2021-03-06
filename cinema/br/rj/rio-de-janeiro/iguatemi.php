<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class iguatemi extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "181cf558711da47b";
		$cinema->name = "Iguatemi";
		$cinema->address = "R. Barão de São Francisco, 236 - Andaraí, Rio de Janeiro, 20560-030, Brazil";
		$cinema->phone = "(0xx)21 2461-2461";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.920404";
		$cinema->long = "-43.2504725";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Duque+de+Caxias+RJ&tid=181cf558711da47b";
	}

}
?>