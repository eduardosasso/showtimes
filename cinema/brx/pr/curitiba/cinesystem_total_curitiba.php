<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinesystem_total_curitiba extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinesystem Total - Curitiba";
		$cinema->address = "R. Itacolomi, 292 - Portão, Curitiba - Paraná, 81070-150, Brazil";
		$cinema->state = "Parana";
		$cinema->state_code = "PR";
		$cinema->city = "Curitiba";
		$cinema->lat = "-25.4793508";
		$cinema->long = "-49.2945175";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Almirante+Tamandar%C3%A9+PR&amp;tid=334275c62cf81d9f";
	}

}
?>