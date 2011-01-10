<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class kinoplex_west_shopping extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "a247e04554815b6e";
		$cinema->name = "Kinoplex West Shopping";
		$cinema->address = "Estr. do Mendanha, 550 - Campo Grande, Rio de Janeiro, Brazil";
		$cinema->phone = "(0xx)21 2461-2461";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.8857776";
		$cinema->long = "-43.5576513";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Belford+Roxo+RJ&tid=a247e04554815b6e";
	}

}
?>