<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemais_shopping_tv_landia_mall extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemais Shopping TV Lândia Mall";
		$cinema->address = "Av. Djalma Batista, 2100 - Chapada, Manaus - Amazonas, 69050-010, Brazil";
		$cinema->state = "Amazonas";
		$cinema->state_code = "AM";
		$cinema->city = "Manaus";
		$cinema->lat = "-3.0981071";
		$cinema->long = "-60.0236905";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Careiro+da+V%C3%A1rzea+AM&amp;tid=845be813d3799ff2";
	}

}
?>