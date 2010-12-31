<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_patio_savassi extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemark Pátio Savassi";
		$cinema->address = "Av. do Contorno, 6061 - São Pedro, Belo Horizonte - Minas Gerais, 30110-060, Brazil";
		$cinema->state = "Minas Gerais";
		$cinema->state_code = "MG";
		$cinema->city = "Belo Horizonte";
		$cinema->lat = "-19.940059";
		$cinema->long = "-43.9339849";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Belo+Horizonte+MG&amp;tid=cc9f86d3a73b93b2";
	}

}
?>