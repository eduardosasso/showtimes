<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class uci_jardim_sul extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "dc1394e0def06d61";
		$cinema->name = "UCI Jardim Sul";
		$cinema->address = "Av. Giovanni Gronchi, 5819 - Vila Andrade, Sao Paulo - São Paulo, 05724-001, Brazil";
		$cinema->phone = "(0xx)11 2164-7700";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.631274";
		$cinema->long = "-46.7365602";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Ara%C3%A7ariguama+SP&tid=dc1394e0def06d61";
	}

}
?>