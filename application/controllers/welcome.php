<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users');
	}

	public function index()
	{
		$data = array('Registros'=>$this->users->getUsers());
        $this->load->view('a',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */