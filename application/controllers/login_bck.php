<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    
    public function index(){
        $data['page'] = 'login';
        
        $this->load->view('login_form', $data);
    }
}
