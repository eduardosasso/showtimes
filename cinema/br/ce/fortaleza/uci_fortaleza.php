<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class uci_fortaleza extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "fddef4878bee588f";
		$cinema->name = "UCI Fortaleza";
		$cinema->address = "Av. Washington Soares, 85 - Guararapes, Fortaleza - Ceará, 60811-340, Brazil";
		$cinema->phone = "(0xx)85 4008-4747";
		$cinema->state = "Ceara";
		$cinema->state_code = "CE";
		$cinema->city = "Fortaleza";
		$cinema->lat = "-3.7571201";
		$cinema->long = "-38.4905866";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Aquiraz+CE&tid=fddef4878bee588f";
	}

}
?>