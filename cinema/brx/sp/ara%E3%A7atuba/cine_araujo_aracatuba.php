<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_araujo_aracatuba extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cine Araújo Araçatuba";
		$cinema->address = "Av. Joaquim Pompeu de Toledo, 601 - Vila Santo Antônio, Araçatuba - São Paulo, 16015-640, Brazil";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Araçatuba";
		$cinema->lat = "-21.2222869";
		$cinema->long = "-50.4355535";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br";
	}

}
?>