<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class uci_ribeirao_preto_shopping extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "b503a8f133211d02";
		$cinema->name = "UCI Ribeirão Preto Shopping";
		$cinema->address = "Av. Cel. Fernando Ferreira Leite, 1540 - Subsetor Sul 5, Ribeirão Preto - São Paulo, 14026-020, Brazil";
		$cinema->phone = "(0xx)16 620-3670";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Ribeirão Preto";
		$cinema->lat = "-21.2090044";
		$cinema->long = "-47.8143558";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Barrinha+SP&tid=b503a8f133211d02";
	}

}
?>