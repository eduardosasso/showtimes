<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_show_resende extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "31c7df646f6dae4c";
		$cinema->name = "Cine Show Resende";
		$cinema->address = "Av. Saturnino Braga, 369 - Resende - Rio de Janeiro, 27511-660, Brazil";
		$cinema->phone = "(0xx)24 3342-5604";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Resende";
		$cinema->lat = "-22.4683109";
		$cinema->long = "-44.4517506";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Alagoa+MG&tid=31c7df646f6dae4c";
	}

}
?>