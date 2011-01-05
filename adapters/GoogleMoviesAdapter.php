<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

abstract class GoogleMoviesAdapter extends AbstractCinemaAdapter{
	abstract protected function get_url();

	public function scrape() {		
		$cinema_url = $this->get_url();
		
		$cinema = $this->get_cinema();

		$curl_handle=curl_init();

		curl_setopt($curl_handle,CURLOPT_URL,$cinema_url);
		curl_setopt ($curl_handle, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; U; FreeBSDi386; en-US; rv:1.2a) Gecko/20021021");
		curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array('Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7'));
		curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
		curl_setopt($curl_handle, CURLOPT_FOLLOWLOCATION, true);  
		curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
		$buffer = curl_exec($curl_handle);
		curl_close($curl_handle);

		$html = str_get_html($buffer);

		$theater = $html->find('h2', 0)->plaintext;
		
		if (empty($theater)) {
			Log::write('Nao encontrou dados para o cinema na url:' . $cinema_url);
			return $cinema;			
		}
		
		$address = $html->find('div[class="info"]',0)->plaintext;
		
		foreach($html->find('.movie') as $movie) {
			$filme = new Movie();

			$filme->name = $movie->find('.name a',0)->plaintext;
			
			$meta = $movie->find('.info',0)->plaintext;
			
			$this->set_movie_meta($meta, $filme);
			
			/*
				TODO esse loop tem q levar em consideracao filmes com ou sem link de horarios... BUG critico
			*/
			
			$showtimes = $movie->find('.times',0)->plaintext;
			//$filme->set_showtime($showtimes);
			$showtimes = explode("&nbsp; ", $showtimes);
			foreach($showtimes as $showtime) {
				$filme->set_showtime($showtime);
			}	

			$cinema->set_movie($filme);
		}

		$html->clear();
		unset($html);

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
		
			
		$lingua = ereg_replace("[^A-Za-z0-9]", "", $lingua); 		
		$filme->subtitle = trim($lingua);
		$filme->genre = trim($genero);
		$filme->age = trim($idade);
		$filme->time = trim($tempo);
	}
	
}

?>