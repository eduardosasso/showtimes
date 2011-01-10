<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class kinoplex_nova_america extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "b1425e4f8b62e79f";
		$cinema->name = "Kinoplex Nova America";
		$cinema->address = "Av. Pastor Martin Luther King Júnior, 126 - Del Castilho, Rio de Janeiro, 20765-000, Brazil";
		$cinema->phone = "(0xx)21 2461-2461";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.8797732";
		$cinema->long = "-43.2701583";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Belford+Roxo+RJ&tid=b1425e4f8b62e79f";
	}

}
?>