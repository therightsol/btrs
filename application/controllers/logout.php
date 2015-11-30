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
         * loading logout page to display msg that you are logged out.
         */
        echo '<h1>You are successfully logged out. </h1>';
        $this->load->view('logout', $data);
    }
}

