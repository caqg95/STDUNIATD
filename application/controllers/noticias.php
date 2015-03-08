<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noticias extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users');
		$this->load->library('Session');
	}

	public function index()
	{
		if(!empty($this->session->userdata('sNombreUsuario')))
		{
			$this->load->view('agremiado/index');
		}
		else
		{
			redirect('http://localhost/STDUNIATD/index.php/boxlogin');
		}
	}

}