<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller{
    /*
     * Default function.
     * My About controller.
     */
   
    
    function index(){
        $data['page'] = 'about';
        $this->load->view('about' , $data);
    }
}

?>
