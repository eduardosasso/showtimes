<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class uci_recife extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "8201a68e9e5eb1f6";
		$cinema->name = "UCI Recife";
		$cinema->address = "R. Padre Carapuceiro, 777 - Boa Viagem, Recife Antigo - Pernambuco, 51020-280, Brazil";
		$cinema->phone = "(0xx)81 3087-2887";
		$cinema->state = "Pernambuco";
		$cinema->state_code = "PE";
		$cinema->city = "Recife";
		$cinema->lat = "-8.1172745";
		$cinema->long = "-34.9014076";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Abreu+e+Lima+PE&tid=8201a68e9e5eb1f6";
	}

}
?>