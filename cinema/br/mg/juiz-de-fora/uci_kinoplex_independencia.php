<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class uci_kinoplex_independencia extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "75d6231b07f242e7";
		$cinema->name = "UCI Kinoplex Independência";
		$cinema->address = "Av. Independência, 3600 - Cascatinha, Juiz de Fora - Minas Gerais, 36025-290, Brazil";
		$cinema->phone = "";
		$cinema->state = "Minas Gerais";
		$cinema->state_code = "MG";
		$cinema->city = "Juiz de Fora";
		$cinema->lat = "-21.7807734";
		$cinema->long = "-43.3630305";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Belmiro+Braga+MG&tid=75d6231b07f242e7";
	}

}
?>