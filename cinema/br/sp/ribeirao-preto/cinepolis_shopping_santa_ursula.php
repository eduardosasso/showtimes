<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinepolis_shopping_santa_ursula extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "24442145ae85b05d";
		$cinema->name = "Cinépolis Shopping Santa Ursula";
		$cinema->address = "R. São José, 933 - Setor Central, Ribeirão Preto - São Paulo, 14025-180, Brazil";
		$cinema->phone = "(0xx)11 3568-2154";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Ribeirão Preto";
		$cinema->lat = "-21.1822141";
		$cinema->long = "-47.8085846";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Barrinha+SP&tid=24442145ae85b05d";
	}

}
?>