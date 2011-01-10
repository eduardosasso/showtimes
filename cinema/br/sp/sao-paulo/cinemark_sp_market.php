<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_sp_market extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4f1bda56bafaa9b4";
		$cinema->name = "Cinemark SP Market";
		$cinema->address = "Av. das Nações Unidas, 22540 - Campo Grande, Sao Paulo - São Paulo, 04795-000, Brazil";
		$cinema->phone = "(0xx)11 5686-2595";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.6779878";
		$cinema->long = "-46.6974404";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Cubat%C3%A3o+SP&tid=4f1bda56bafaa9b4";
	}

}
?>