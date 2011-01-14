<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinespaco_sorocaba extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "41be8c78ce3a719f";
		$cinema->name = "Cinespaço Sorocaba";
		$cinema->address = "Praça Pio XII, 65 - Jardim Santa Rosália, Sorocaba - São Paulo, Brazil";
		$cinema->phone = "";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sorocaba";
		$cinema->lat = "-23.485795";
		$cinema->long = "-47.4430649";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Alum%C3%ADnio+SP&tid=41be8c78ce3a719f";
	}

}
?>