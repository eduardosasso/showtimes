<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_central_plaza extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4c497d51fad0290a";
		$cinema->name = "Cinemark Central Plaza";
		$cinema->address = "Av. Dr. Francisco Mesquita, 1000 - Vila Prudente, Sao Paulo - São Paulo, 03153-001, Brazil";
		$cinema->phone = "(0xx)11 6914-1202";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5973975";
		$cinema->long = "-46.5811414";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Aruj%C3%A1+SP&tid=4c497d51fad0290a";
	}

}
?>