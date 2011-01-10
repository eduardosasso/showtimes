<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class kinoplex_itaim extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "fbb95bd98140557d";
		$cinema->name = "Kinoplex Itaim";
		$cinema->address = "R. Joaquim Floriano, 462 - Itaim Bibi, Sao Paulo - São Paulo, 04534-002, Brazil";
		$cinema->phone = "(0xx)11 3131-2004";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5845199";
		$cinema->long = "-46.674503";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Diadema+SP&tid=fbb95bd98140557d";
	}

}
?>