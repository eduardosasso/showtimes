<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class gnc_caxias extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "GNC Caxias";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "RS";
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