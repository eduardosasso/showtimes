<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinespaco_mag_shopping extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "895b0a27bc887a9b";
		$cinema->name = "Cinespaço Mag Shopping";
		$cinema->address = "Av. Governador Flávio Ribeiro Coutinho, 115 - Jardim Oceania, João Pessoa - Paraíba, 58037-000, Brazil";
		$cinema->phone = "(0xx)83 3048-1140";
		$cinema->state = "Paraiba";
		$cinema->state_code = "PB";
		$cinema->city = "João Pessoa";
		$cinema->lat = "-7.0972319";
		$cinema->long = "-34.8343976";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Jo%C3%A3o+Pessoa+PB&tid=895b0a27bc887a9b";
	}

}
?>