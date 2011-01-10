<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class uci_shopping_estacao extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "bfade3cbf184a1bf";
		$cinema->name = "UCI Shopping Estação";
		$cinema->address = "Av. Sete de Setembro, 2775 - Rebouças, Curitiba - Paraná, 80230-010, Brazil";
		$cinema->phone = "(0xx)41 3595-5550";
		$cinema->state = "Parana";
		$cinema->state_code = "PR";
		$cinema->city = "Curitiba";
		$cinema->lat = "-25.4373281";
		$cinema->long = "-49.2656693";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Almirante+Tamandar%C3%A9+PR&tid=bfade3cbf184a1bf";
	}

}
?>