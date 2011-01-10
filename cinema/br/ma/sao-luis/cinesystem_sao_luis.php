<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinesystem_sao_luis extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "7069b01c4ff04682";
		$cinema->name = "Cinesystem São Luís";
		$cinema->address = "Av. São Luís Rei da França, 8 - Angelim, São Luís - Maranhao, 65065-470, Brazil";
		$cinema->phone = "";
		$cinema->state = "Maranhao";
		$cinema->state_code = "MA";
		$cinema->city = "São Luís";
		$cinema->lat = "-2.5351469";
		$cinema->long = "-44.2262131";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Alc%C3%A2ntara+MA&tid=7069b01c4ff04682";
	}

}
?>