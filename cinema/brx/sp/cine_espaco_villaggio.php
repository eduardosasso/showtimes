<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_espaco_villaggio extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cine Espaço Villaggio";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "SP";
		$cinema->city = "";
		$cinema->lat = "";
		$cinema->long = "";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Alum%C3%ADnio+SP&amp;tid=41be8c78ce3a719f";
	}

}
?>