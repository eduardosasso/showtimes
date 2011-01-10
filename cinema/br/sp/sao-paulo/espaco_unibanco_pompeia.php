<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class espaco_unibanco_pompeia extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "1aac19668581ad81";
		$cinema->name = "Espaço Unibanco Pompéia";
		$cinema->address = "R. Turiassu, 2100 - Barra Funda, Sao Paulo - São Paulo, 05005-000, Brazil";
		$cinema->phone = "";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5276727";
		$cinema->long = "-46.6805698";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Ara%C3%A7ariguama+SP&tid=1aac19668581ad81";
	}

}
?>