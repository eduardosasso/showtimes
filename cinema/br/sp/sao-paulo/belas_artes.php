<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class belas_artes extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "3f75192c94e34d79";
		$cinema->name = "Belas Artes";
		$cinema->address = "R. da Consolação, 2423 - Consolação, Sao Paulo - São Paulo, 01416-001, Brazil";
		$cinema->phone = "";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5548667";
		$cinema->long = "-46.6618827";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Caieiras+SP&tid=3f75192c94e34d79";
	}

}
?>