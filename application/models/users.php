<?php

	class Users extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}

		//Obtener usuarios
		public function getUsers()
		{
			$query = $this->db->query('select * from ssgcuenta');
			return $query->result();
		}

	}

?>