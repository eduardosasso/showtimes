<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class kinoplex_vila_olimpia extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "a68f1d63b1ae06c4";
		$cinema->name = "Kinoplex Vila Olímpia";
		$cinema->address = "R. Olimpíadas, 360 - Itaim Bibi, Sao Paulo - São Paulo, 04551-000, Brazil";
		$cinema->phone = "";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5961016";
		$cinema->long = "-46.6873434";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Diadema+SP&tid=a68f1d63b1ae06c4";
	}

}
?>