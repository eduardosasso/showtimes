<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

abstract class GoogleMoviesAdapter extends AbstractCinemaAdapter{
	abstract protected function get_url();
	
	public function scrape(){
		$cinema_url = $this->get_url();
		
		$cinema = $this->get_cinema();
		
		$html = htmlqp($cinema_url);
		
		$theater = $html->find('h2')->text();
		
		$address = $html->top()->find('div.info',0)->text();
		
		foreach($html->top()->find('.movie') as $movie) {
			$filme = new Movie();
			
			$filme->name = $movie->children('.name a')->text();
			
			$meta = $movie->parent()->children('.info')->text();
			
			$this->set_movie_meta($meta, $filme);

			$showtimes = $movie->parent()->find('.times')->text();

			$showtimes = explode("&Acirc;&nbsp;", htmlentities($showtimes));
			foreach($showtimes as $showtime) {
				$filme->set_showtime($showtime);
			}	

			$cinema->set_movie($filme);
			
		}
		return $cinema;
	}
	
	private function set_movie_meta($meta, $filme) {
		//limpa special chars ocultos
		$meta = utf8_decode($meta);
		$meta = str_replace('?', '', $meta);
		$meta = utf8_encode($meta);

		$meta = preg_split('/[-]+/',$meta);
		
		$meta = array_filter($meta,function ($var) {return empty($var) == false;});
		
		$lingua = end($meta);
		array_pop($meta); 

		$genero = end($meta);
		array_pop($meta); 

		$idade = end($meta);
		array_pop($meta);

		$tempo = end($meta);
		array_pop($meta);
		
			
		$lingua = preg_replace("[^A-Za-z0-9]", "", $lingua); 		
		$filme->subtitle = trim($lingua);
		$filme->genre = trim($genero);
		$filme->age = trim($idade);
		$filme->time = trim($tempo);
	}
	
}

?>