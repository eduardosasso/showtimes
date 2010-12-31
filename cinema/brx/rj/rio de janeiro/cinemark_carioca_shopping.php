<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_carioca_shopping extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemark Carioca Shopping";
		$cinema->address = "Av. Vicente de Carvalho, 909 - Vicente de Carvalho, Rio de Janeiro, 21210-002, Brazil";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.8506704";
		$cinema->long = "-43.3099164";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Belford+Roxo+RJ&amp;tid=c23694a0c3eb8bb0";
	}

}
?>