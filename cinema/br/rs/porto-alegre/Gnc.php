<?php

class Gnc extends AbstractCinemaAdapter {
	public function scrape() {
		return array("id" => time());
	}
	public function scrapex() {
		$url = 'http://www.gnccinemas.com.br/conteudo/home.asp';
		$referer = 'http://www.gnccinemas.com.br/conteudo/home.asp';
	
		$curl_handle=curl_init();
		/*
			TODO adicionar controle de excecao, por tempo
				 fazer essa chamada mais generica
		*/
		curl_setopt($curl_handle,CURLOPT_URL,$url);
		curl_setopt($curl_handle, CURLOPT_POST,1);
		curl_setopt($curl_handle, CURLOPT_POSTFIELDS,'CodCidade=1');

		curl_setopt($curl_handle, CURLOPT_REFERER, $referer); 
		curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT,2);
		curl_setopt($curl_handle, CURLOPT_FOLLOWLOCATION, true);  
		curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Firefox');
		curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
		$buffer = curl_exec($curl_handle);
		curl_close($curl_handle);

		$cinema = new Cinema();
		$cinema->name = 'Teste GNC';
		$cinema->address = 'Rua XY';
		$cinema->phone = '12345';
		$cinema->ticket = '456';
		//phpQuery::$debug = 1;
		
		if (!empty($buffer)) {
			phpQuery::newDocument($buffer);

			$line = pq('td.td_pontilhada_l0t0r0b0');
			$trs = pq('table tr', $line);
			$htmlSalas = pq('.topo_tabela_azul4[width="210"]');
			/**
			aqui pega o link para o cinema do grupo. Deve fazer um novo curl para pegar o endereco
			foreach($htmlSalas as $sala){
				echo trim(pq('a',$sala)->attr('href'));
			}
			*/
			//$filmes = pq('div.a ,div.b', $prog);

			foreach ($trs as $key => $value) {
				/*
				 echo '<pre>';
				 print_r(pq($value)->html());
				 echo '</pre>';
				 return;
				*/
				$filme = trim(pq('a.nome_filme_programacao-home',$value)->text());
				if(empty($filme)) continue;
				$showtimes = trim(pq('.horarios_programacao-home', $value)->text());
				$showtimes = explode(" - ", $showtimes);
				/*$censura = trim(pq('input',$value)->attr('value'));

				$legenda = pq('div.legenda span',$value)->attr('onmouseover');
				$legenda = strtolower($legenda);

				$pattern = '(legendado|dublado|nacional)';
				preg_match($pattern, $legenda, $matches);

				$legenda = trim($matches[0]);		

				$horarios = pq('div.horas > span', $value);		
*/
				$filme_horarios = new Movie();
				$filme_horarios->name = $filme;
				$filme_horarios->age = "censura";//$censura;
				$filme_horarios->subtitle = "legenda";//$legenda;
				//verificar se nao e' possivel passar a lista de diretamente para o showtimes
				$filme_horarios->showtimes = $showtimes;
/*
				foreach ($horarios as $key => $value) {
					$horario = pq($value)->text();
					if (!empty($horario)) {
						$filme_horarios->set_showtime($horario);
					}			
				}
*/				
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
