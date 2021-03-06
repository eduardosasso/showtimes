<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class gnc_joinville_mueller extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "11a0a014723232fd";
		$cinema->name = "GNC Joinville Mueller";
		$cinema->address = "R. Visc. de Taunay, 235 - Centro, Joinville - Santa Catarina, 89201-420, Brazil";
		$cinema->phone = "(0xx)47 3903-3220";
		$cinema->state = "Santa Catarina";
		$cinema->state_code = "SC";
		$cinema->city = "Joinville";
		$cinema->lat = "-26.3032622";
		$cinema->long = "-48.8499484";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Araquari+SC&tid=11a0a014723232fd";
	}

}
?>