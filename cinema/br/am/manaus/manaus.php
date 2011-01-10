<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class manaus extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "8cd67302fb83631a";
		$cinema->name = "Manaus";
		$cinema->address = "Av. Djalma Batista, 482 - Ns. das Graças, Manaus - Amazonas, 69050-010, Brazil";
		$cinema->phone = "";
		$cinema->state = "Amazonas";
		$cinema->state_code = "AM";
		$cinema->city = "Manaus";
		$cinema->lat = "-3.112504";
		$cinema->long = "-60.0231756";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Careiro+da+V%C3%A1rzea+AM&tid=8cd67302fb83631a";
	}

}
?>