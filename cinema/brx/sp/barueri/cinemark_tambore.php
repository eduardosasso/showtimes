<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_tambore extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemark Tamboré";
		$cinema->address = "Av. Piracema, 669 - Tamboré, Barueri - São Paulo, 06460-030, Brazil";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Barueri";
		$cinema->lat = "-23.5046737";
		$cinema->long = "-46.8325722";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Ara%C3%A7ariguama+SP&amp;tid=e71b3b5671494a76";
	}

}
?>