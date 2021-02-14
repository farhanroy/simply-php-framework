<?php 
class Teman_model{
private	$table = 'Teman';
private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getTeman(){
		$this->db->query('SELECT * FROM Teman');

		return $this->db->resultSet();
	}
}