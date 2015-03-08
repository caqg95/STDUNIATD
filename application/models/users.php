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

		//Saber si un usuario X existe
		public function existeUser($x)
		{
			$query = $this->db->query("select * from ssgcuenta where sNombreUsuario='$x' ");
			$res = $query->result();
			if(!empty($res[0]->sNombreUsuario))
				return TRUE;
			else
				return FALSE;
		}

		//Obtener Password del usuario X
		public function obtenerPassword($x)
		{
			$query = $this->db->query("select sClave from ssgcuenta where sNombreUsuario='$x' ");
			$res = $query->result();
			return $res[0]->sClave;
		}
	}

?>