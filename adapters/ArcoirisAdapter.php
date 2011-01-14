<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

abstract class ArcoirisAdapter extends AbstractCinemaAdapter{
	abstract protected function get_id_cidade_do_site();
	abstract protected function get_id_cinema_do_site();

	public function scrape() {
		
		$cinema = $this->get_cinema();
		
		$id_cidade =  $this->get_id_cidade_do_site();
		$id_cinema = $this->get_id_cinema_do_site();
		
		$url = "http://www.arcoiriscinemas.com.br/index.php?DataObject_Controller/load/programacao_cidades/$id_cidade";

		$curl_handle=curl_init();

		curl_setopt($curl_handle,CURLOPT_URL,$url);
		curl_setopt ($curl_handle, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; U; FreeBSDi386; en-US; rv:1.2a) Gecko/20021021");
		curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array('Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7'));
		// curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
		curl_setopt($curl_handle, CURLOPT_FOLLOWLOCATION, true);  
		curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
		$buffer = curl_exec($curl_handle);
		curl_close($curl_handle);
		
		if (empty($buffer)) {
			/*
				TODO notificar por email q aqui deu tilt
			*/
			return;
		}
		
		phpQuery::newDocument($buffer);
		
		$cinema_raw = pq('ul#' . $id_cinema);
		
		$filmes = pq('li', $cinema_raw);

		$hoje = date('d/m');
		
		foreach ($filmes as $filme_el) {
			/*
				TODO detectar dublado e legendado no nome
			*/
			$nome = trim(pq('a',$filme_el)->text());
			
			if (!$nome) {
				continue;
			}
			
			//identifica se é dublado ou legendado... vem abreviado no nome do filme
			preg_match("/\s?-\s?(LEG|DUB)\s?[.]$/i", $nome, $matches);
			$lingua = "Legendado";
			if (count($matches) > 0) {
				if (strtolower($matches[1]) == 'dub') {
					$lingua = "Dublado";
				}
				$nome = str_replace($matches[0],"",$nome);
			}
			
			$filme = new Movie();

			$filme->name = $nome;
			$filme->subtitle = $lingua;
			
			$detalhes = pq('ul li div', $filme_el);
			
			foreach ($detalhes as $detalhe) {
				$dia = trim(pq('h3', $detalhe)->text());
				
				if ($dia == $hoje) {
					$horarios_raw = trim(pq('span', $detalhe)->text());
					$horarios = explode('|', $horarios_raw);
					
					foreach($horarios as $value) {
						$horario = trim($value);
												
						if (!empty($horario)) {
							$filme->set_showtime($horario);
						}						
					}						
				}
			}
			$cinema->set_movie($filme);		
		}
		return $cinema;
	}	
	
}

?>