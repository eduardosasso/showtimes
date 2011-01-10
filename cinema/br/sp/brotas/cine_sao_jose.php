<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_sao_jose extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "8ef5573e5265abc";
		$cinema->name = "Cine São José";
		$cinema->address = "Av. Rodolfo Guimarães, 635 - Brotas - São Paulo, 17380-000, Brazil";
		$cinema->phone = "";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Brotas";
		$cinema->lat = "-22.2797302";
		$cinema->long = "-48.1272234";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Brotas+SP&tid=8ef5573e5265abc";
	}

}
?>