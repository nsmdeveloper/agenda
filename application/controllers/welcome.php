<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->helper('url');

	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function test() {

		//$this->load->view('vista_index');
		echo base_url();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */