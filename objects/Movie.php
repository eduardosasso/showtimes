<?php 
class Movie {  
    public $name;  
    public $subtitle;
    public $genre;  
    public $age;
    public $time;
    public $summary;  

	public $showtimes = array(); 
	
	function set_showtime($showtime) {
		$this->showtimes[] = $showtime;
	}
}
?>