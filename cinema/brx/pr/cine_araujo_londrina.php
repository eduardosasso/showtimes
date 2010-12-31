<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_araujo_londrina extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cine Araújo Londrina";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "PR";
		$cinema->city = "";
		$cinema->lat = "";
		$cinema->long = "";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Arapongas+PR&amp;tid=9cb0b4dbefd372e2";
	}

}
?>