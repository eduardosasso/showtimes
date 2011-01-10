<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_barigui extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "1049e1132df20f72";
		$cinema->name = "Cinemark Barigui";
		$cinema->address = "R. Prof. Pedro Viriato Parigot de Souza, 600 - Campina do Siqueira, Curitiba - Paraná, 81200-100, Brazil";
		$cinema->phone = "(0xx)41 3317-6419";
		$cinema->state = "Parana";
		$cinema->state_code = "PR";
		$cinema->city = "Curitiba";
		$cinema->lat = "-25.4367677";
		$cinema->long = "-49.3144143";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Almirante+Tamandar%C3%A9+PR&tid=1049e1132df20f72";
	}

}
?>