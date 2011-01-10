<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemais_marilia extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "dd380654e1149a7c";
		$cinema->name = "Cinemais Marília";
		$cinema->address = "R. dos Tucunarés, 500 - Jardim Marajá, Marília - São Paulo, 17507-280, Brazil";
		$cinema->phone = "";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Marília";
		$cinema->lat = "-22.187528";
		$cinema->long = "-49.9678";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=%C3%81lvaro+de+Carvalho+SP&tid=dd380654e1149a7c";
	}

}
?>