<?php 
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

//phpunit test/helper/CinemaFinderTest.php
class CinemaFinderTest extends PHPUnit_Framework_TestCase {
	public function test_find() {

		//1. gera cinemas por todo o brasil com fallback para o google
		//
		//pega o json das cidades e faz loop em todas as cidades
		//no resultado de cada find cria a estrutura de diretorios se NÃO existir
		//para cada cinema gerar um class que é o fallback para o google movies...
		//cada classe de cinema tem q se registrar no couchdb para rodar via loop sem precisar navegar na estrutura
		
		//sempre que um cinema for chamado, browser ou via polling cron atualizar seu status no couchdb.
		//se no update executar e não tiver cinema remover do couchdb

		$cinemas_brx = Env::path('temp/brasil.json');		
		$cinemas_brx = file_get_contents($cinemas_brx);
		$cinemas_brx = json_decode($cinemas_brx);
		
		//teste santa catarina
		//$cinemas_br[] = $cinemas_brx[23];
		$cinemas_br = $cinemas_brx;
		
		//loop em todos os estados e cidades do estado
		foreach ($cinemas_br as $value) {
			$estado = $value->nome;
			$uf = $value->codigo;
			$cidades = $value->cidades;
			
			//so uma cidade para teste para ficar mais rapido
			//$cidades = array('Florianópolis');
			
			$cinema_finder = new CinemaFinder('br',$uf, $cidades);
			$cinemas = $cinema_finder->get_all_cinemas();
			
			$template = new CinemaTemplate();
			
			foreach ($cinemas as $cinema) {
				$endereco =  $cinema['endereco'];
				$geocode = new Geocode($endereco);
				
				$cinema['endereco'] = $geocode->address();
				$cinema['lat'] = $geocode->lat();
				$cinema['long'] = $geocode->long();
				$cinema['cidade'] = $geocode->city();
				
				$cinema['uf'] = $uf;
				$estado = $geocode->state();

				if ($estado) {
					$cinema['estado'] = $estado['name'];
				} else {
					$cinema['estado'] = '';
				}
				
				$cidade_clean = Helper::clean_string($geocode->city());
				
				$dir = "cinema/br/$uf/" . $cidade_clean . '/';
				$dir = strtolower($dir);
				$template->create($dir, $cinema);				
			}

		}
		
		
		// $dir = "/cinema/br/sc/florianopolis/";
		// 
		// $template = new CinemaTemplate();
		// 
		// $arr = array("nome" => "GNC Iguatémi", "id" => "123", "endereco" => "endereco", "url" => "http://www.google.com.br/movies?near=porto+alegre,+rs,+bra&tid=8731d7134e5b461a");
		// 
		// $template->create($dir, $arr);
		
		
		// echo $file;
		// 
		// file_put_contents($file, "ssss");
		
		
		// $fh = fopen($myFile, 'w') or die("can't open file"); 
		// $stringData = "Subject\n"; 
		// fwrite($fh, $stringData); 
		// $stringData = "Message\n"; 
		// fwrite($fh, $stringData); 
		// fclose($fh);

		//$template_class = file_get_contents($url_template);
		
		
		// $cinema_finder = new CinemaFinder('br','RS', 'Florianópolis');
		// 		echo $cinema_finder->find();
		
		
		//2. rotina de polling - update de horarios
		//loop em todos os cinemas registrados no couchdb, so rodar a classe dinamica...
		//gerar e armazenar hash md5 do cinema e horarios para comparar e so fazer push para clientes com novidades.
		//no couch guardar id do cinema como array [pais, estado, cidade] ou ver como filtrar por estrutura... TALVEZ...
		//chamar callback do cliente registrado passando a lista de cinemas com horarios novos
		//controle de erros quando cinema não retornar horarios, pensar em outras..
		
		//3. Diariamente rodar o CinemaFinder usando o arquivo json de cidades para encontrar novos cinemas 
		//para cada lista de cinemas por cidade retornada comparar com a ja existente no couchdb verificando o tid com o cinema do google e fazendo
		//reflexao para so validar os que implementar o googlemoviesadapter. o resultado disso cria a estrutura de dir e template como cinema novo e
		//notifica por email
		
		//quando pegar o cinema para gravar armazenar como literal estatico, tid do cinema, nome, endereco, e gps do endereco
		
	}	
}

?>