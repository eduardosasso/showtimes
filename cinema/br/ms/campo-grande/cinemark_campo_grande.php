<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_campo_grande extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "28f0db853a06a277";
		$cinema->name = "Cinemark Campo Grande";
		$cinema->address = "Av. Afonso Pena, 4909 - Jardim dos Estados, Campo Grande - Mato Grosso do Sul, 79020-000, Brazil";
		$cinema->phone = "(0xx)67 3326-2034";
		$cinema->state = "Mato Grosso do Sul";
		$cinema->state_code = "MS";
		$cinema->city = "Campo Grande";
		$cinema->lat = "-20.4600408";
		$cinema->long = "-54.5941903";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "13";
	}
	protected function get_id_cinema_do_site() {
		return "694";
	}

}
?>