<?php

class Cinemark extends AbstractCinemaAdapter {

	public function scrape() {
		$bourbon_ipiranga_poa = 'http://www.cinemark.com.br/horarios/?cidade=11&cine1=695&cine2=&filme1=&x=20&y=11';
		$barra_shopping_sul = 'http://www.cinemark.com.br/horarios/?cidade=11&cine1=704&cine2=&filme1=&x=14&y=7';
		$downtown = 'http://www.cinemark.com.br/horarios/?cidade=9&cine1=719&cine2=&filme1=&x=18&y=14';
		
		$curl_handle=curl_init();
		/*
			TODO adicionar controle de excecao, por tempo
				 fazer essa chamada mais generica
		*/
		curl_setopt($curl_handle,CURLOPT_URL,$downtown);
		curl_setopt ($curl_handle, CURLOPT_REFERER, "http://www.cinemark.com.br/home.html"); 
		curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
		curl_setopt($curl_handle, CURLOPT_FOLLOWLOCATION, true);  
		curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Firefox');
		curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
		$buffer = curl_exec($curl_handle);
		curl_close($curl_handle);

		$cinema = new Cinema();
		$cinema->name = 'Bourbon Ipiranga';
		$cinema->address = 'Rua X';
		$cinema->phone = '123';
		$cinema->ticket = '456';
		
		if (!empty($buffer)) {
			phpQuery::newDocument($buffer);

			$prog = pq('#prog_hora_meio');

			$filmes = pq('div.a ,div.b', $prog);

			foreach ($filmes as $key => $value) {

				// echo '<pre>';
				// print_r(pq($value)->html());
				// echo '</pre>';
				// return;

				$filme = trim(pq('div.titulo a',$value)->text());

				$censura = trim(pq('input',$value)->attr('value'));

				$legenda = pq('div.legenda span',$value)->attr('onmouseover');
				$legenda = strtolower($legenda);

				$pattern = '(legendado|dublado|nacional)';
				preg_match($pattern, $legenda, $matches);

				$legenda = trim($matches[0]);		

				$horarios = pq('div.horas > span', $value);		

				$filme_horarios = new Movie();
				$filme_horarios->name = $filme;
				$filme_horarios->age = $censura;
				$filme_horarios->subtitle = $legenda;

				foreach ($horarios as $key => $value) {
					$horario = pq($value)->text();
					if (!empty($horario)) {
						$filme_horarios->set_showtime($horario);
					}			
				}
				
				$cinema->set_movie($filme_horarios);

			}
			return $cinema;
			// echo '<pre>';
			// print_r($cinema);
			// echo '</pre>';
		}	

    }

}

?>
