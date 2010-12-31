<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_granja_viana extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemark Granja Viana";
		$cinema->address = "Rod. Raposo Tavares - Cotia - São Paulo, Brazil";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Cotia";
		$cinema->lat = "-23.6002097";
		$cinema->long = "-46.9016651";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Alum%C3%ADnio+SP&amp;tid=9708d3d71a2ec6a2";
	}

}
?>