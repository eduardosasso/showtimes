<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinesystem_cidade_curitiba extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "9a47b0b6ed8b7408";
		$cinema->name = "Cinesystem Cidade - Curitiba";
		$cinema->address = "Av. Mal. Floriano Peixoto, 4984 - Hauer, Curitiba - Paraná, 81630-000, Brazil";
		$cinema->phone = "(0xx)41 3315-0090";
		$cinema->state = "Parana";
		$cinema->state_code = "PR";
		$cinema->city = "Curitiba";
		$cinema->lat = "-25.4722468";
		$cinema->long = "-49.2519598";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Almirante+Tamandar%C3%A9+PR&tid=9a47b0b6ed8b7408";
	}

}
?>