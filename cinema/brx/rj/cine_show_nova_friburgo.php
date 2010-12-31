<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_show_nova_friburgo extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cine Show Nova Friburgo";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "RJ";
		$cinema->city = "";
		$cinema->lat = "";
		$cinema->long = "";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br";
	}

}
?>