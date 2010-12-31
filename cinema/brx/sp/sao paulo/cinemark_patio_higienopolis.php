<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_patio_higienopolis extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemark Patio Higienopolis";
		$cinema->address = "Av. Higienópolis, 646 - Consolação, Sao Paulo - São Paulo, 01238-000, Brazil";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5429789";
		$cinema->long = "-46.6577884";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Caieiras+SP&amp;tid=9ae081e9a938cd3f";
	}

}
?>