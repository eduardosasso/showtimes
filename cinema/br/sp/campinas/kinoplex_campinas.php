<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class kinoplex_campinas extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "6e772b26e79ad101";
		$cinema->name = "Kinoplex Campinas";
		$cinema->address = "Av. Guilherme Campos - Campinas - São Paulo, 13087-635, Brazil";
		$cinema->phone = "(0xx)19 3131-2800";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Campinas";
		$cinema->lat = "-22.8512946";
		$cinema->long = "-47.0591189";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Americana+SP&tid=6e772b26e79ad101";
	}

}
?>