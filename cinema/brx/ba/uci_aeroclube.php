<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class uci_aeroclube extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "UCI Aeroclube";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "BA";
		$cinema->city = "";
		$cinema->lat = "";
		$cinema->long = "";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Cama%C3%A7ari+BA&amp;tid=634829f418672c17";
	}

}
?>