<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class logout extends CI_Controller{
    public function index (){
        $data['page'] = 'logout';
        
        /*
         * logging out ... means deleting session
         */
        $this->session->unset_userdata('username');     // deleting data in same request
        $this->session->sess_destroy();                 // deleting data on next request.
        
        
        /*
         * loading login page -- redirecting.
         */ 
        redirect('login');
    }
}

