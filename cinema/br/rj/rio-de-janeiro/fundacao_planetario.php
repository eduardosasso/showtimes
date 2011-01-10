<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class fundacao_planetario extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "7336cf7f616932ec";
		$cinema->name = "Fundação Planetário";
		$cinema->address = "Rio de Janeiro, 22451-070, Brazil";
		$cinema->phone = "";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.9786433";
		$cinema->long = "-43.2303843";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Rio+de+Janeiro+RJ&tid=7336cf7f616932ec";
	}

}
?>