<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class espaco_unibanco_sp extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Espaço Unibanco (SP)";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "SP";
		$cinema->city = "";
		$cinema->lat = "";
		$cinema->long = "";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Aruj%C3%A1+SP&amp;tid=acfb03c3005ddb4d";
	}

}
?>