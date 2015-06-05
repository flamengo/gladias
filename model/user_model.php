<?php
class User_Model extends CI_Model {
	
	function __construct() {
		parent::__construct();
		$this -> load -> database();
	}

	function getUser($data) {
		$query = $this -> db -> select('userID,email') -> get_where('User', array(
			'email' => $data['email'],
			'password' => $data['password']
		));
		return $query -> row_array();
	}

	function insertNewUser($data) {
		$this -> db -> insert('User', array(
			'email' => $data['email'],
			'password' => $data['password'],
			'registerDate' => date('Y-m-d H:i:s')
		));
		return $this -> db -> insert_id();
	}

}
