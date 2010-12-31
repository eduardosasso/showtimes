<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_araujo_bauru extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cine Araújo Bauru";
		$cinema->address = "R. Henrique Savi - Bauru - São Paulo, 17011-590, Brazil";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Bauru";
		$cinema->lat = "-22.3380322";
		$cinema->long = "-49.0533009";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br";
	}

}
?>