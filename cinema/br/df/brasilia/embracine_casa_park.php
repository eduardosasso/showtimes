<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class embracine_casa_park extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "491edefce865ab3e";
		$cinema->name = "Embracine Casa Park";
		$cinema->address = "Brasília - Brazilian Federal District, Brazil";
		$cinema->phone = "(0xx)61 3462-1143";
		$cinema->state = "Distrito Federal";
		$cinema->state_code = "DF";
		$cinema->city = "Brasilia";
		$cinema->lat = "-15.7801482";
		$cinema->long = "-47.9291698";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Bras%C3%ADlia+DF&tid=491edefce865ab3e";
	}

}
?>