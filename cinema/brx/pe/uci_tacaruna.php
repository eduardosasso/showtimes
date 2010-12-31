<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class uci_tacaruna extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "UCI Tacaruna";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "PE";
		$cinema->city = "";
		$cinema->lat = "";
		$cinema->long = "";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Abreu+e+Lima+PE&amp;tid=1232c11c8acdd74a";
	}

}
?>