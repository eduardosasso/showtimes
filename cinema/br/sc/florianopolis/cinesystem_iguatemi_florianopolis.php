<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinesystem_iguatemi_florianopolis extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "5fd0ab9cd248c047";
		$cinema->name = "Cinesystem Iguatemi - Florianópolis";
		$cinema->address = "Av. Madre Benvenuta, 687 - Santa Mônica, Florianopolis - Santa Catarina, Brazil";
		$cinema->phone = "(0xx)44 3220-8010";
		$cinema->state = "Santa Catarina";
		$cinema->state_code = "SC";
		$cinema->city = "Florianopolis";
		$cinema->lat = "-27.5913714";
		$cinema->long = "-48.5144621";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=%C3%81guas+Mornas+SC&tid=5fd0ab9cd248c047";
	}

}
?>