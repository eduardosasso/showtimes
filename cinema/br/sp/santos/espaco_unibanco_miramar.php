<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class espaco_unibanco_miramar extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "be0c77e1fe82a47d";
		$cinema->name = "Espaço Unibanco Miramar";
		$cinema->address = "Av. Mal. Floriano Peixoto, 44 - Gonzaga, Santos - São Paulo, 11060-300, Brazil";
		$cinema->phone = "(0xx)13 3288-1988";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Santos";
		$cinema->lat = "-23.9670227";
		$cinema->long = "-46.336712";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Bertioga+SP&tid=be0c77e1fe82a47d";
	}

}
?>