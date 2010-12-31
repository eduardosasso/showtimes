<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_araujo_duque_de_caxias extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cine Araújo Duque de Caxias";
		$cinema->address = "Rod. Washington Luiz - Rio de Janeiro, Brazil";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "";
		$cinema->lat = "-22.7805446";
		$cinema->long = "-43.285754";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Belford+Roxo+RJ&amp;tid=827ca6c4a25eeb84";
	}

}
?>