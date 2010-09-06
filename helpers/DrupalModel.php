<?php

// error_reporting(E_ALL);
// ini_set('display_errors', TRUE);
// ini_set('display_startup_errors', TRUE);

require_once "MovieHelper.php";

class DrupalModel {
	
	function __construct() {
		chdir('/www/beta.refilmagem.com.br/html/');
		require_once './includes/bootstrap.inc';
		
		$_SERVER['REQUEST_METHOD'] = 'get';
		$_SERVER['REMOTE_ADDR'] = '201.21.229.42';
		//$_SERVER['HTTP_HOST'] = '';
		drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
	}
	
	public function update($cinemas){
		foreach ($cinemas as $key => $cinema) {
			$cinema_nid = get_cinema_nid($cinema);

			$city_tid = get_taxonomy_city_id($cinema->city);

			delete_showtimes($cinema_nid);
			
			foreach ($cinema->filmes as $key => $movie) {
				$movie_nid = get_movie_nid($movie);

				$horario = new StdClass();
				$horario->type = 'horario';
				$horario->title = "$cinema->name  $cinema->city $movie->title $movie->language";
				$horario->field_ref_filme[0]['nid'] = $movie_nid;
				$horario->field_ref_cinema[0]['nid'] = $cinema_nid;
				
				foreach ($movie->horarios as $key => $showtime) {
					$horario->field_horario[]['value'] = $showtime;
				}
				echo '<pre>';
				print_r($horario);
				echo '</pre>';
				//node_save($horario);
			}
		}

		// print '<pre>';
		// print_r(node_load(712509));
		// print '</pre>';
	}
	
	public function get_movie_nid($movie) {
		$movie_id_name = $this->get_movie_id_name($movie);
		$movie_nid = $this->get_movie_nid_by_name($movie_id_name);
		
		if (empty($movie_nid)) {
			$movie_nid = $this->add_new_movie($movie);
		}
			
		return $movie_nid;
	}
	
	private function get_movie_id_name($movie){
		_pathauto_include();
		return strtolower(pathauto_cleanstring($movie->name . ' ' .  $movie->subtitle));
	}
	
	public function get_taxonomy_genero_id($genero){
		$genero_term = taxonomy_get_term_by_name($genero);

		if (count($genero_term) == 0) {
			$new_term = array();
			$new_term['name'] = $genero;
			$new_term['vid'] = '7';
			$new_term['parent'] = 0;
			$new_term['weight'] = 0;

			taxonomy_save_term($new_term);
			$genero_tid = $new_term['tid'];
		} else {
			$genero_tid = $genero_term[0]->tid;
		}
		return $genero_tid;
	}
	
	public function add_new_movie($movie) {
		$movie_helper = new MovieHelper();
		
		$movie_id_name = $this->get_movie_id_name($movie);
		
		$node = new StdClass();
		$node->type = 'filme';
		$node->title = $movie->name;
		$node->body = $movie->summary;
		$node->field_movie_id_name[0]['value'] = $movie_id_name;
		$node->field_idade[0]['value'] = $movie->age;
		$node->field_tempo[0]['value'] = $movie->time;
		$node->status = 0; // unPublished

		$lingua = 72; //legendado 
		if (strtolower($movie->subtitle) == 'dublado') {
			$lingua = 71;
			$node->title = $movie->name . ' (dublado)';
		} 

		$genero = $this->get_taxonomy_genero_id($movie->genre);

		$node->taxonomy = array($lingua,$genero);

		$trailers = $movie_helper->get_movie_trailers($movie->name);
		foreach ($trailers as $key => $value) {
			$node->field_trailer[$key]['value'] = $value;
		}

		$posters = $movie_helper->get_movie_posters($movie->name);
		foreach ($posters as $key => $value) {
			$node->field_poster_externo[$key]['value'] = $value;
		}
		
		node_save($node);
		
		return $node->nid;
		
	}
	
	public function get_cinema_nid($cinema){
		//legado drupal...
		$theater_id = base64_encode($cinema->name . $cinema->address);
		
		$theater_nid = $this->get_theater_nid($theater_id);
		
		if (empty($theater_nid)) {
			/*
				TODO tem q notificar por email quando incluir um novo.
			*/
			$node = new StdClass();
			$node->type = 'cinema';
			$node->field_theater_id[0]['value'] = $theater_id;
			$node->title = $cinema->name;
			$node->body = $cinema->address;

			$node->taxonomy = array($cinema->state, $cinema->city);
			
			node_save($node);
			
			return $node->nid;
			
		} else {
			return $theater_nid;
		}
	}
	
	private function get_movie_nid_by_name($movie_name) {
		$view = views_get_view('find_movie_id_name');

		$view->preview('default', array($movie_name));

		return 	$view->result['0']->nid;
	}
	
	private function get_theater_nid($theater_id) {
		$view = views_get_view('find_theater');

		$view->preview('default', array($theater_id));

		$nid = $view->result['0']->nid;

		if (empty($nid)) {
			return;
		} else {
			return $nid;
		}
	}
	
	public function get_taxonomy_city_id($city){
		$city_term = taxonomy_get_term_by_name($city);

		if (count($city_term) == 0) {
			$new_term = array();
			$new_term['name'] = $city;
			$new_term['vid'] = '4';
			$new_term['parent'] = 0;
			$new_term['weight'] = 0;

			taxonomy_save_term($new_term);
			$city_tid = $new_term['tid'];
		} else {
			$city_tid = $city_term[0]->tid;
		}
		return $city_tid;
	}

	//Limpa horarios do cinema antes de incluir novos
	public function delete_showtimes($cinema_nid) {
		db_query('delete from {node} where nid in (select nid from {content_type_horario} where field_manual_value is null and field_ref_cinema_nid = %d)', $cinema_nid);
				
		db_query('delete from {content_type_horario} where field_manual_value is null and field_ref_cinema_nid = %d', $cinema_nid);

	}

}

?>