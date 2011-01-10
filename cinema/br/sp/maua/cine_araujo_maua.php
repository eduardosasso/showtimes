<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_araujo_maua extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "bda4f685ca33c02b";
		$cinema->name = "Cine Araújo Mauá";
		$cinema->address = "Av. Antônia Rosa Fioravanti, 3270 - Jardim Rosina, Mauá - São Paulo, 09390-120, Brazil";
		$cinema->phone = "(0xx)11 4544-3723";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Mauá";
		$cinema->lat = "-23.6639093";
		$cinema->long = "-46.467423";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Aruj%C3%A1+SP&tid=bda4f685ca33c02b";
	}

}
?>