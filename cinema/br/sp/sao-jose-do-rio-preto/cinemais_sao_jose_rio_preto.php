<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemais_sao_jose_rio_preto extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "7d7b1b2d86345cc2";
		$cinema->name = "Cinemais São José Rio Preto";
		$cinema->address = "Av. José Munia, 4775 - Nova Redentora, São José do Rio Preto - São Paulo, 15085-350, Brazil";
		$cinema->phone = "";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "São José do Rio Preto";
		$cinema->lat = "-20.827095";
		$cinema->long = "-49.3874114";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Bady+Bassitt+SP&tid=7d7b1b2d86345cc2";
	}

}
?>