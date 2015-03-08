<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users');
		$this->load->library('Session');
	}

	public function index()
	{
		$this->session->sess_destroy();
		redirect('http://localhost/STDUNIATD/index.php/boxlogin');
	}

}