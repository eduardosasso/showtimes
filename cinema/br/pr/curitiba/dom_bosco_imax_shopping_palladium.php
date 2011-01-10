<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class dom_bosco_imax_shopping_palladium extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "484b05fca697ab29";
		$cinema->name = "Dom Bosco IMAX (Shopping Palladium)";
		$cinema->address = "Av. Pres. Kennedy, 4121 - Portão, Curitiba - Paraná, 80610-010, Brazil";
		$cinema->phone = "";
		$cinema->state = "Parana";
		$cinema->state_code = "PR";
		$cinema->city = "Curitiba";
		$cinema->lat = "-25.4768281";
		$cinema->long = "-49.2910452";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Almirante+Tamandar%C3%A9+PR&tid=484b05fca697ab29";
	}

}
?>