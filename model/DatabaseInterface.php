<?php
interface DatabaseInterface
{
	public function save($document);
	public function find($document);
	public function clean_database();
}
?>