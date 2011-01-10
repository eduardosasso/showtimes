<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class uci_orient_paralela extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "74af948f2835e674";
		$cinema->name = "UCI Orient Paralela";
		$cinema->address = "Av. Luiz Viana Filho, 8544 - São Cristóvão, Salvador - Bahia, 41490-000, Brazil";
		$cinema->phone = "";
		$cinema->state = "Bahia";
		$cinema->state_code = "BA";
		$cinema->city = "Salvador";
		$cinema->lat = "-12.9106763";
		$cinema->long = "-38.3472612";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Cama%C3%A7ari+BA&tid=74af948f2835e674";
	}

}
?>