<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class uci_analia_franco extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "8c617942ea24021b";
		$cinema->name = "UCI Analia Franco";
		$cinema->address = "Av. Regente Feijó, 1759 - Vila Formosa, Sao Paulo - São Paulo, 03342-000, Brazil";
		$cinema->phone = "(0xx)11 6643-4240";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5626545";
		$cinema->long = "-46.5594074";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Aruj%C3%A1+SP&tid=8c617942ea24021b";
	}

}
?>