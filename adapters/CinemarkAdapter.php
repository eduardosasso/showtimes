<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

abstract class CinemarkAdapter extends AbstractCinemaAdapter {
	abstract protected function get_id_cidade_do_site();
	abstract protected function get_id_cinema_do_site();
	
	private $excecoes;
	public function scrape() {
		$cinema = $this->get_cinema();

		$id_cidade =  $this->get_id_cidade_do_site();
		$id_cinema = $this->get_id_cinema_do_site();

		$url = "http://www.cinemark.com.br/horarios/?cidade=$id_cidade&cine1=$id_cinema";
		$curl_handle=curl_init();
		
		curl_setopt($curl_handle, CURLOPT_URL,$url);
		curl_setopt($curl_handle, CURLOPT_REFERER, "http://cinemark.com.br/home.html"); 
		curl_setopt($curl_handle, CURLOPT_FOLLOWLOCATION, true);  
		curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Firefox');	
		curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER,1);
		
		$buffer = curl_exec($curl_handle);
		curl_close($curl_handle);
		
		if (!empty($buffer)) {
			phpQuery::newDocument($buffer);
			
			//tabela de excecoes dos horarios
			$this->excecoes = pq('#legenda #legenda_meio div.b');

			$content = pq('#cont_esq');
			$cine = pq('#titulo', $content);

			$prog = pq('#prog_hora_meio');
			
			$filmes = pq('div.a ,div.b, div.premiere', $prog);

			foreach ($filmes as $key => $value) {
				$filme = new Movie();

				$filme->name = trim(pq('div.titulo a',$value)->text());

				$filme->age = trim(pq('input',$value)->attr('value'));

				$legenda = pq('div.legenda span',$value)->attr('onmouseover');
				$legenda = strtolower($legenda);

				$pattern = '(legendado|dublado|nacional)';
				preg_match($pattern, $legenda, $matches);

				$legenda = trim($matches[0]);
				$filme->subtitle = $legenda;

				$horarios = pq('div.horas > span', $value);		

				foreach ($horarios as $key => $value) {
					$horario = pq($value)->text();
					if (!empty($horario)) {
						//recupera a legenda que identifica o dia que o filme vai passar ou não.
						$excecao_horario = pq('span:gt('. $key . '):first', pq($value)->parent())->attr('onmouseover'); 						
						if ($this->tem_sessao_hoje($excecao_horario)) {
							$filme->set_showtime($horario);
						}						
					}		
				}
				
				if ($filme->showtimes) {
					$cinema->set_movie($filme);
				}

			}
			return $cinema;
		}				
	}
	
	public function tem_sessao_hoje($excecao_horario){
		preg_match("/(legenda)_([A-Z])/", $excecao_horario, $matches);
		
		if ($matches) {
			$id_excecao = $matches[2];
			
			//$hoje = DateTime::createFromFormat('d/m', date("d/m"));
			$hoje = DateTime::createFromFormat('d/m', "20/01");
			
			foreach ($this->excecoes as $key => $value) {
				//procura para encontrar o tipo da legenda baseado no codigo legenda_X para depois identificar a excecao
				$achou_excecao = preg_match("/legenda_[" . $id_excecao . "]/", pq($value)->html());
				
				if ($achou_excecao) {
					
					$texto = trim(pq('.horas', $value)->text());
					
					//identifica as datas no formato dia/mes
					preg_match_all("/(\d{1,2}\/\d{1,2})/", $texto, $datas);
					
					$nao_eh_para_exibir = preg_match("/NÃO/", $texto);
					
					foreach ($datas[0] as $key => $value) {
						$data = DateTime::createFromFormat('d/m', $value);
						if ($data == $hoje) {
							if ($nao_eh_para_exibir) {
								return false;
							}
							//eh pra exibir no dia
							return true;
						} 
					}
					//se nas datas acima não bateu é pq não é pra mostrar	
					return false;	
				}
			}
		}
		//se for qualquer outro caso retorna ok			
		return true;
	}

}

?>
