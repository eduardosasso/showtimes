<?php

class ShowtimesController{
	
	private $dir;
	
	//cria o object com o nome da cidade para recuperar todos os seus cinemas
	function __construct($country, $city) {
		$this->dir = "cinemas/$country/$city";
	}
	
	public function getShowtimes(){
		$files = scandir($this->dir);

		$showtimes = array();
		foreach ($files as $key => $file) {
			if (preg_match("/^[\w]/", $file)) {			
				$classname = basename ($file, '.php');

				$object = new $classname;
				$cinema = $object->scrape();

				$showtimes[] = 	$cinema;
				// echo '<pre>';
				// print_r($cinema);
				// echo '</pre>';
			}
		}
		return $showtimes;
	}
}	

?>