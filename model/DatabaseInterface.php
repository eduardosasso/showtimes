<?php
interface DatabaseInterface
{
	public function save($document);
	public function find($document);
	public function get_cinemas();
	
	public function get_subscribers();
	
	public function clean_database();
}
?>