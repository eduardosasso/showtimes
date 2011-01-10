<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_aricanduva extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "5e25d9108b8f6eae";
		$cinema->name = "Cinemark Aricanduva";
		$cinema->address = "Av. Aricanduva, 5555 - Aricanduva, Sao Paulo - São Paulo, 03527-000, Brazil";
		$cinema->phone = "(0xx)11 3444-2564";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5651579";
		$cinema->long = "-46.5074134";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Aruj%C3%A1+SP&tid=5e25d9108b8f6eae";
	}

}
?>