<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_boulevard_tatuape extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "dec1a668e30d5a19";
		$cinema->name = "Cinemark Boulevard Tatuapé";
		$cinema->address = "R. Gonçalves Crespo - Tatuapé, Sao Paulo - São Paulo, 03066-030, Brazil";
		$cinema->phone = "";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5384744";
		$cinema->long = "-46.5755377";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "1";
	}
	protected function get_id_cinema_do_site() {
		return "690";
	}

}
?>