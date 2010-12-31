<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_abc_plaza extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemark ABC Plaza";
		$cinema->address = "Av. Industrial, 600 - Centro, Santo André - São Paulo, 09080-500, Brazil";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Santo André";
		$cinema->lat = "-23.649896";
		$cinema->long = "-46.5325815";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Aruj%C3%A1+SP&amp;tid=377e7db7d415d997";
	}

}
?>