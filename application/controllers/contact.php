<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller{
     /*
     * Default function.
     * .
     */
    public function index(){
        $data['page'] = 'contact';
        $this->load->view('contact' , $data);
    }
}
