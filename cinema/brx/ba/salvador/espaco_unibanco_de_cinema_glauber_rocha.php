<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class espaco_unibanco_de_cinema_glauber_rocha extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Espaço Unibanco de Cinema - Glauber Rocha";
		$cinema->address = "Salvador - Bahia, 40020-160, Brazil";
		$cinema->state = "Bahia";
		$cinema->state_code = "BA";
		$cinema->city = "Salvador";
		$cinema->lat = "-12.9774086";
		$cinema->long = "-38.5145531";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Cama%C3%A7ari+BA&amp;tid=6f8a815f8cf886ab";
	}

}
?>