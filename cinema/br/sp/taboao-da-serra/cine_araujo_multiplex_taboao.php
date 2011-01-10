<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_araujo_multiplex_taboao extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "febeb9cf5c02e0ab";
		$cinema->name = "Cine Araújo Multiplex Taboão";
		$cinema->address = "Rod. Régis Bittencourt Taboão da Serra - São Paulo, 06768-100";
		$cinema->phone = "(0xx)11 4787-7644";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Taboão da Serra";
		$cinema->lat = "-23.6180222";
		$cinema->long = "-46.7992522";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Ara%C3%A7ariguama+SP&tid=febeb9cf5c02e0ab";
	}

}
?>