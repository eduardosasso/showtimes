<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_osasco extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "26ca2ea67e3c4c4a";
		$cinema->name = "Cinemark Osasco";
		$cinema->address = "Av. dos Autonomistas, 1400 - Industrial Autonomistas, Osasco - São Paulo, 06194-050, Brazil";
		$cinema->phone = "";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Osasco";
		$cinema->lat = "-23.54117";
		$cinema->long = "-46.7672421";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Ara%C3%A7ariguama+SP&tid=26ca2ea67e3c4c4a";
	}

}
?>