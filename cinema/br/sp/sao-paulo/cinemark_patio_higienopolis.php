<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_patio_higienopolis extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "9ae081e9a938cd3f";
		$cinema->name = "Cinemark Patio Higienopolis";
		$cinema->address = "Av. Higienópolis, 646 - Consolação, Sao Paulo - São Paulo, 01238-000, Brazil";
		$cinema->phone = "(0xx)11 3823-2875";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5429789";
		$cinema->long = "-46.6577884";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Caieiras+SP&tid=9ae081e9a938cd3f";
	}

}
?>