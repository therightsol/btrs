<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
            $data['page'] = 'home';
            $this->load->view('home', $data);
	}
}
