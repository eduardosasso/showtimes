<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class espaco_unibanco_sp extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "acfb03c3005ddb4d";
		$cinema->name = "Espaço Unibanco (SP)";
		$cinema->address = "R. Augusta, 1475 - Consolação, República, Sao Paulo - São Paulo, 01304-001, Brazil";
		$cinema->phone = "(0xx)11 3288-6780";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "São Paulo";
		$cinema->lat = "-23.5357427";
		$cinema->long = "-46.6355976";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Aruj%C3%A1+SP&tid=acfb03c3005ddb4d";
	}

}
?>
