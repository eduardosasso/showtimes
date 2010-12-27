<?php

//phpunit tests/helpers/DrupalModelTest.php
class DrupalModelTest extends PHPUnit_Framework_TestCase
{
	private $cinema = array();
	private $drupal;
	
	public function setUp() {
		//Pega os filmes de um cinema qualquer para ficar mais rapido.
		$object = new Cinesystem;
		$cinema = $object->scrape();

		$this->cinema = $cinema;
		
		$this->drupal = new DrupalModel();
	}
	
	public function testModelHelpers() {
		// $city_tid = $this->drupal->get_taxonomy_city_id($this->cinema->city);
		// $this->assertNotNull($city_tid, "Nao achou taxonomia para cidade " . $this->cinema->city);
		// 
		// $cinema_nid = $this->drupal->get_cinema_nid($this->cinema);
		// $this->assertNotNull($cinema_nid,"Nao achou nid para o cinema " . $this->cinema->name);
		// 
		// $this->drupal->delete_showtimes($cinema_nid);
		// 
		// $showtimes_results = db_query('select count(*) count from {content_type_horario} where field_manual_value is null and field_ref_cinema_nid = %d', $cinema_nid);
		// 
		// $showtimes_results = db_fetch_array($showtimes_results);
		// $showtimes_results = $showtimes_results['count'];
		// 
		// $this->assertEquals(0, $showtimes_results, "Nao limpou horarios para o cinema " . $this->cinema->name);
		
		// 
		// $genre_tid = $this->drupal->get_taxonomy_genero_id("Ação");
		// $this->assertNotNull($genre_tid,"Nao achou o id para a taxonomia de genero");
		// 
		// $movie = new Movie();
		// $movie->name = 'Rocky 4';		
		// $movie->subtitle = 'Legendado';
		// $movie->genre = 'Ação';
		// $movie->age = '12';
		// $movie->time = '1h12min';
		// $movie->summary = 'Lorem ipsum pro nullam mnesarchum ut, vim ea wisi modus concludaturque, cum id';
		// $movie->set_showtime('13:30');
		// $movie->set_showtime('19:50');
		// 
		// $movie_nid = $this->drupal->add_new_movie($movie);
		// $this->assertNotNull($movie_nid,"Nao conseguiu criar novo filme");
		// 
		// //tem q ter a permissao de delete own filme content para anonimo
		// node_delete($movie_nid);

		//teste completo recuperando ou criando um filme se necessario
		// $movie = $this->cinema->movies[0];
		// $movie->subtitle = 'dublado';
		// $movie_nid = $this->drupal->get_movie_nid($movie);
		// echo $movie_nid;
		
		// $this->cinema->name = 'Cinema Presidente';
		// $this->cinema->state = 'SP';
		// $nid = $this->drupal->get_cinema_nid($this->cinema);
		// echo $nid;

		$this->drupal->update($this->cinema);
		
	}
	
    public function xtestUpdate(){
		// echo '<pre>';
		// print_r($this->cinemas);
		// echo '</pre>';
		// $model = new DrupalModel();
		// 		$model->update($cinemas);
        
        $this->assertEquals(0, count($stack));
        //  
        // array_push($stack, 'foo');
        // $this->assertEquals('foo', $stack[count($stack)-1]);
        // $this->assertEquals(1, count($stack));
        //  
        // $this->assertEquals('foo', array_pop($stack));
        // $this->assertEquals(0, count($stack));
    }
}

function __autoload($class_name) {
	$folder = classFolder($class_name);

	if($folder)
		require_once($folder.$class_name.".php");
}

function classFolder($className, $sub = "/") {
	$class_dir = getcwd();

	$dir = dir($class_dir.$sub);

	if(file_exists($class_dir.$sub.$className.".php"))
		return $class_dir.$sub;

	while(false !== ($folder = $dir->read())) {
		if($folder != "." && $folder != "..") {
			if(is_dir($class_dir.$sub.$folder)) {
				$subFolder = classFolder($className, $sub.$folder."/");

				if($subFolder)
					return $subFolder;
			}
		}
	}
	$dir->close();
	return false;
}


?>