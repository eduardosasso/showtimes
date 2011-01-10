<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_sao_jose_dos_pinhais extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "96f33ae75d10fb6b";
		$cinema->name = "Cinemark São José dos Pinhais";
		$cinema->address = "R. Voluntários da Pátria, 170 - Centro, São José dos Pinhais - Paraná, 83005-020, Brazil";
		$cinema->phone = "";
		$cinema->state = "Parana";
		$cinema->state_code = "PR";
		$cinema->city = "São José dos Pinhais";
		$cinema->lat = "-25.5386125";
		$cinema->long = "-49.2051404";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Almirante+Tamandar%C3%A9+PR&tid=96f33ae75d10fb6b";
	}

}
?>