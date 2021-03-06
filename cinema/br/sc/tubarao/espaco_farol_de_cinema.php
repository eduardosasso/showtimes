<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class espaco_farol_de_cinema extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "267041b08fcae866";
		$cinema->name = "Espaço Farol de Cinema";
		$cinema->address = "Av. Marcolino Martins Cabral, 2525 - Vila Moema, Tubarão - Santa Catarina, 88705-003, Brazil";
		$cinema->phone = "";
		$cinema->state = "Santa Catarina";
		$cinema->state_code = "SC";
		$cinema->city = "Tubarão";
		$cinema->lat = "-28.4748804";
		$cinema->long = "-48.9939648";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Armaz%C3%A9m+SC&tid=267041b08fcae866";
	}

}
?>