<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_manaus extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemark Manaus";
		$cinema->address = "Av. Gen. Rodrigo Otávio, 555 - Japiim, Manaus - Amazonas, Brazil";
		$cinema->state = "Amazonas";
		$cinema->state_code = "AM";
		$cinema->city = "Manaus";
		$cinema->lat = "-3.1217734";
		$cinema->long = "-59.9811274";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Careiro+da+V%C3%A1rzea+AM&amp;tid=33676c43026cd0e8";
	}

}
?>