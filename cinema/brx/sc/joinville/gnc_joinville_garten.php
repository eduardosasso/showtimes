<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class gnc_joinville_garten extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "GNC Joinville Garten";
		$cinema->address = "R. Rolf Gern, 333 - Petrópolis, Joinville - Santa Catarina, 89208-800, Brazil";
		$cinema->state = "Santa Catarina";
		$cinema->state_code = "SC";
		$cinema->city = "Joinville";
		$cinema->lat = "-26.3485875";
		$cinema->long = "-48.8264822";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Araquari+SC&amp;tid=c4d9f12b338cb95";
	}

}
?>