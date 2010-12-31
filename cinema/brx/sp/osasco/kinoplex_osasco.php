<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class kinoplex_osasco extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Kinoplex Osasco";
		$cinema->address = "Av. dos Autonomistas, 1828 - Industrial Autonomistas, Osasco - São Paulo, 06194-050, Brazil";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Osasco";
		$cinema->lat = "-23.5387915";
		$cinema->long = "-46.7720491";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Ara%C3%A7ariguama+SP&amp;tid=7e2c635b64df0314";
	}

}
?>