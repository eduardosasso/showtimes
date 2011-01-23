<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_ribeirao_preto extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "2ee00238d9c3b43f";
		$cinema->name = "Cinemark Ribeirão Preto";
		$cinema->address = "Av. Pres. Kennedy, 1500 - Subsetor Leste 6, Ribeirão Preto - São Paulo, 14095-220, Brazil";
		$cinema->phone = "(0xx)16 3617-3263";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Ribeirão Preto";
		$cinema->lat = "-21.2073616";
		$cinema->long = "-47.7697128";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "6";
	}
	protected function get_id_cinema_do_site() {
		return "726";
	}
}
?>