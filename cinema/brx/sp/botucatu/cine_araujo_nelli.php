<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_araujo_nelli extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cine Araújo Nelli";
		$cinema->address = "Botucatu - São Paulo, Brazil";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Botucatu";
		$cinema->lat = "-22.8903957";
		$cinema->long = "-48.4553087";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br";
	}

}
?>