<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class unibanco_arteplex_curitiba extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "2256f3a97bf8942";
		$cinema->name = "Unibanco Arteplex Curitiba";
		$cinema->address = "R. Comendador Araújo, 731 - Batel, Curitiba - Paraná, 80420-000, Brazil";
		$cinema->phone = "";
		$cinema->state = "Parana";
		$cinema->state_code = "PR";
		$cinema->city = "Curitiba";
		$cinema->lat = "-25.4380032";
		$cinema->long = "-49.2813831";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Almirante+Tamandar%C3%A9+PR&tid=2256f3a97bf8942";
	}

}
?>