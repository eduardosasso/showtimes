<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class uci_santana extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "74b8b81a515cf46e";
		$cinema->name = "UCI Santana";
		$cinema->address = "R. Conselheiro Moreira de Barros, 2780 - Mandaqui, Sao Paulo - São Paulo, 02430-001, Brazil";
		$cinema->phone = "";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.4832195";
		$cinema->long = "-46.6456788";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Aruj%C3%A1+SP&tid=74b8b81a515cf46e";
	}

}
?>