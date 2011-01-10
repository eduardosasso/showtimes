<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemais_cuiaba extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "57f18993e4a2fa76";
		$cinema->name = "Cinemais Cuiaba";
		$cinema->address = "Av. Brasília, 177 - Jardim das Américas, Cuiabá - Mato Grosso, 78060-601, Brazil";
		$cinema->phone = "";
		$cinema->state = "Mato Grosso";
		$cinema->state_code = "MT";
		$cinema->city = "Cuiabá";
		$cinema->lat = "-15.6116841";
		$cinema->long = "-56.0737877";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Chapada+dos+Guimar%C3%A3es+MT&tid=57f18993e4a2fa76";
	}

}
?>