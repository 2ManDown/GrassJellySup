<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$data['page'] = "index";
		$this->load->view('theme',$data);
	}
}
