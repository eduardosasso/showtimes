<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class usiminas_belas_artes_cinema extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "2a566db7a71ee0ca";
		$cinema->name = "USIMINAS Belas Artes Cinema";
		$cinema->address = "R. Gonçalves Dias, 1581 - Lourdes, Belo Horizonte - Minas Gerais, 30140-090, Brazil";
		$cinema->phone = "(0xx)31 3252-7232";
		$cinema->state = "Minas Gerais";
		$cinema->state_code = "MG";
		$cinema->city = "Belo Horizonte";
		$cinema->lat = "-19.9307607";
		$cinema->long = "-43.9392078";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Belo+Horizonte+MG&tid=2a566db7a71ee0ca";
	}

}
?>