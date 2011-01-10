<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cineplus_jardim_das_americas extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "5f7bf0ad0f3b4752";
		$cinema->name = "CinePlus Jardim das Américas";
		$cinema->address = "Av. Ns. de Lourdes, 63 - Jardim das Américas, Curitiba - Paraná, 81530-020, Brazil";
		$cinema->phone = "(0xx)41 3029-7099";
		$cinema->state = "Parana";
		$cinema->state_code = "PR";
		$cinema->city = "Curitiba";
		$cinema->lat = "-25.4516028";
		$cinema->long = "-49.2289796";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Almirante+Tamandar%C3%A9+PR&tid=5f7bf0ad0f3b4752";
	}

}
?>