<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinesystem_sao_jose_dos_campos extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "801b127bf9e4b2b6";
		$cinema->name = "Cinesystem  São José dos Campos";
		$cinema->address = "Av. Andrômeda, 227 - Jardim Satélite, São José dos Campos - São Paulo, 12230-000, Brazil";
		$cinema->phone = "";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "São José dos Campos";
		$cinema->lat = "-23.2176609";
		$cinema->long = "-45.8937992";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Ca%C3%A7apava+SP&tid=801b127bf9e4b2b6";
	}

}
?>