<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinesystem_curitiba extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4a9a43312be8710f";
		$cinema->name = "Cinesystem Curitiba";
		$cinema->address = "R. Brg. Franco, 2300 - Centro, Curitiba - Paraná, 80250-030, Brazil";
		$cinema->phone = "";
		$cinema->state = "Parana";
		$cinema->state_code = "PR";
		$cinema->city = "Curitiba";
		$cinema->lat = "-25.4405233";
		$cinema->long = "-49.2768733";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Almirante+Tamandar%C3%A9+PR&tid=4a9a43312be8710f";
	}

}
?>