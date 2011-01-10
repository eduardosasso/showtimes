<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemais_manaus_millenium extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "5c8c07a9fa66d370";
		$cinema->name = "Cinemais Manaus Millenium";
		$cinema->address = "Av. Djalma Batista, 1661 - São Geraldo, Manaus - Amazonas, 69050-010, Brazil";
		$cinema->phone = "";
		$cinema->state = "Amazonas";
		$cinema->state_code = "AM";
		$cinema->city = "Manaus";
		$cinema->lat = "-3.1019819";
		$cinema->long = "-60.0236666";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Careiro+da+V%C3%A1rzea+AM&tid=5c8c07a9fa66d370";
	}

}
?>