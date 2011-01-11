<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_araujo_multiplex_pantanal extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "800b03263e1e586";
		$cinema->name = "Cine Araújo Multiplex Pantanal";
		$cinema->address = "Av. Historiador Rubens de Mendonça, 3300 - Centro Político Administrativo, Cuiabá - Mato Grosso, 78050-000, Brazil";
		$cinema->phone = "(0xx)65 3091-4122";
		$cinema->state = "Mato Grosso";
		$cinema->state_code = "MT";
		$cinema->city = "Cuiabá";
		$cinema->lat = "-15.5718377";
		$cinema->long = "-56.0709587";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Chapada+dos+Guimar%C3%A3es+MT&tid=800b03263e1e586";
	}

}
?>