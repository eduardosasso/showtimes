<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_araujo_dourados extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "5496802cdd7778d7";
		$cinema->name = "Cine Araújo Dourados";
		$cinema->address = "Av. Marcelino Pires, 3600 - Centro, Dourados - Mato Grosso do Sul, 79830-000, Brazil";
		$cinema->phone = "";
		$cinema->state = "Mato Grosso do Sul";
		$cinema->state_code = "MS";
		$cinema->city = "Dourados";
		$cinema->lat = "-22.226144";
		$cinema->long = "-54.7938932";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Douradina+MS&tid=5496802cdd7778d7";
	}

}
?>