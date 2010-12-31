<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cineplex_bh_shopping extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cineplex BH Shopping";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "MG";
		$cinema->city = "";
		$cinema->lat = "";
		$cinema->long = "";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Belo+Horizonte+MG&amp;tid=782f94df8e82ab37";
	}

}
?>