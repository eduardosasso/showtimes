<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class g7_apucarana extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "1b7d7ba7fee854bd";
		$cinema->name = "G7 Apucarana";
		$cinema->address = "Pc Int Manoel Ribas, 135 Apucarana - PR, 86804-450";
		$cinema->phone = "(0xx)43 3033-6707";
		$cinema->state = "Paraná";
		$cinema->state_code = "PR";
		$cinema->city = "Apucarana";
		$cinema->lat = "-23.5457389";
		$cinema->long = "-51.4552427";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Apucarana+PR&tid=1b7d7ba7fee854bd";
	}

}
?>