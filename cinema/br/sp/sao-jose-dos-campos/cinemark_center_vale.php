<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_center_vale extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "2edbfcfff0a7b5c1";
		$cinema->name = "Cinemark Center Vale";
		$cinema->address = "Av. Dep. Benedito Matarazzo, 9403 - São José dos Campos - São Paulo, 12216-580, Brazil";
		$cinema->phone = "(0xx)12 3922-9009";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "São José dos Campos";
		$cinema->lat = "-23.2364688";
		$cinema->long = "-45.9182335";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Biritiba-Mirim+SP&tid=2edbfcfff0a7b5c1";
	}

}
?>