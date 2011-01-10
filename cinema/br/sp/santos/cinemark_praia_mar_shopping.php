<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_praia_mar_shopping extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "3b9f681ea787616f";
		$cinema->name = "Cinemark Praia Mar Shopping";
		$cinema->address = "R. Alexandre Martins, 80 - Aparecida, Santos - São Paulo, 11040-010, Brazil";
		$cinema->phone = "(0xx)13 3227-9691";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Santos";
		$cinema->lat = "-23.9759535";
		$cinema->long = "-46.3103286";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Bertioga+SP&tid=3b9f681ea787616f";
	}

}
?>