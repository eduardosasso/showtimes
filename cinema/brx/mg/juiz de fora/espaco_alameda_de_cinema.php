<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class espaco_alameda_de_cinema extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Espaço Alameda de Cinema";
		$cinema->address = "R. Morais E Castro, 300 - São Mateus, Juiz de Fora - Minas Gerais, 36025-160, Brazil";
		$cinema->state = "Minas Gerais";
		$cinema->state_code = "MG";
		$cinema->city = "Juiz de Fora";
		$cinema->lat = "-21.7732346";
		$cinema->long = "-43.3508569";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Belmiro+Braga+MG&amp;tid=2159add0b3f1718c";
	}

}
?>