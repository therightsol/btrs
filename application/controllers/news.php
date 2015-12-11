<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    public function index() {
        $data['page'] = 'News';
        
        $news_record = $this->load_news('view_news');
        $data['news_rec'] = $news_record;
        
        $this->load->view('news', $data);
    }

    public function insert() {
        $data['page'] = 'addNews';
        
        
        $this->load->helper('form');
        $this->load->helper('date');
        $data['page'] = 'News';
         $data['usermatch'] = '';
        $data['success'] = '';

        if ($_POST) {
            $rules = array(
                array(
                    'field' => 'agree',
                    'label' => 'You want To show This?',
                    'rules' => 'required|trim'
                ),
                array(
                    'field' => 'write_news',
                    'label' => 'Write your News Here',
                    'rules' => 'required|max_length[225]|trim'
                ),
                array(
                    'field' => 'agree_change',
                    'label' => 'please clik here',
                    'rules' => 'required|trim'
                )
            );

            $this->load->library('form_validation');
            $this->form_validation->set_rules($rules);

            if (!$this->form_validation->run() == FALSE) {
                date_default_timezone_set("Asia/Karachi");
                $date = date('d/m/y');


                $this->load->model('btrsnews');
                $username = $this->session->userdata('username');
                $un= $this->input->post('username',true);
                $show_now = $this->input->post('agree', TRUE);
                $full_news = $this->input->post('write_news', TRUE);
                $checkbox = $this->input->post('agree_change', TRUE);

                $this->btrsnews->added_by = $username;
                $this->btrsnews->added_on = $date;
                $this->btrsnews->isActive = $show_now;
                $this->btrsnews->news = $full_news;
                $this->btrsnews->isModified = $checkbox;


                // b) saving into DB

                $this->btrsnews->insertRecord();

                $news_record = $this->btrsnews->getRecord();
                // type casting, changing obj or std_class to array
                $news_record = (array) $news_record;
                if ($un == $username){
                    $usermatch = 'yes';
                //echo '<tt><pre>' . var_export($news_record, True) . '</tt></pre>';exit;
               //
               //var_dump($news_record) ;
                
               //exit();
                

                
                

                $data['$usermatch'] = 'yes';
                $data['success'] = 'yes';
                $this->load->view('news_form', $data);
                }else{
                    //echo ' u change username';
                    $data['usermatch'] = 'no';
                    $this->load->view('news_form', $data);
                }
            } else {
                $data['page'] = 'News';
                $data['success'] = 'no';
                $this->load->view('news_form', $data);
            }
        } else {

            $data['page'] = 'News';
            $this->load->view('news_form', $data);
        }
    }
    
    
    public function update($id = '') {
        $data['page'] = 'update_news';  
        
        if($_POST){
            exit;
        }
        
        
        if(!empty($id)){
            // its a request to update news.
            
            if(filter_input_array(INPUT_GET)){
                // if this is a post request.
                
                
                
            }else {
                // if this is not a post request.
                $this->load->model('btrsnews'); 
                $news_record = $this->btrsnews->getRecord($id, 'nid'); 
                
                if(!empty($news_record)){
                    // record found so  continue.
                    
                    $data['id'] = $id;
                    $news_record = (array) $news_record; // changing to array
                    $data['news_rec'] = $news_record;
                            
                    $this->load->view('do_update_news', $data);
                    
                    
                }else {
                    // record not found.
                    // display error. and load view.
                    echo 'Record not found.';
                }
            }
        }else {
            //$this->load->view('update_news' , $data);

            $news_rec = $this->load_news();
            $data['news_rec'] = $news_rec;

            $this->load->view('update_news', $data);
        }
    }
    
    
    private function load_news($page = ''){
        // Loading News and sending to View page 
        $this->load->model('btrsnews');
        
        if($page == 'view_news'){ 
            /* getting record of specific columns */
            $cols = ['news', 'added_on']; 
        }else { // calling update news. 
            /* getting record of specific columns */
            $cols = ['news', 'added_on', 'nid']; 
        }
        
        $news_record = $this->btrsnews->getRecord(FALSE, $cols); 
        
        //echo '<tt><pre>' . var_export($news_record, TRUE) . '</pre></tt>';
        return $news_record;
        
        
    }

}
