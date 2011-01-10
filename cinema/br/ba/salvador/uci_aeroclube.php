<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class uci_aeroclube extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "634829f418672c17";
		$cinema->name = "UCI Aeroclube";
		$cinema->address = "Av. Otávio Mangabeira, 6000 - Patamares, Salvador - Bahia, 41680-000, Brazil";
		$cinema->phone = "(0xx)71 3172-9990";
		$cinema->state = "Bahia";
		$cinema->state_code = "BA";
		$cinema->city = "Salvador";
		$cinema->lat = "-12.9619899";
		$cinema->long = "-38.3990265";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Cama%C3%A7ari+BA&tid=634829f418672c17";
	}

}
?>