<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_campo_grande extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemark Campo Grande";
		$cinema->address = "Av. Afonso Pena, 4909 - Jardim dos Estados, Campo Grande - Mato Grosso do Sul, 79020-000, Brazil";
		$cinema->state = "Mato Grosso do Sul";
		$cinema->state_code = "MS";
		$cinema->city = "Campo Grande";
		$cinema->lat = "-20.4600408";
		$cinema->long = "-54.5941903";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br";
	}

}
?>