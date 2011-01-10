<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_espaco_villaggio extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "41be8c78ce3a719f";
		$cinema->name = "Cine Espaço Villaggio";
		$cinema->address = "Praça Pio XII - Jardim Santa Rosália, Sorocaba - São Paulo, Brazil";
		$cinema->phone = "(0xx)11 8332-1313";
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