<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_boulevard_tatuape extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemark Boulevard Tatuapé";
		$cinema->address = "R. Gonçalves Crespo - Tatuapé, Sao Paulo - São Paulo, 03066-030, Brazil";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5384744";
		$cinema->long = "-46.5755377";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Aruj%C3%A1+SP&amp;tid=dec1a668e30d5a19";
	}

}
?>