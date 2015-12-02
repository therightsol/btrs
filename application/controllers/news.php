<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    public function index() {

        $data['page'] = 'News';
        $this->load->view('news', $data);
    }

    public function insert() {
        $this->load->helper('form');
        $this->load->helper('date');
        $data['page'] = 'News';
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

                $news_record = $this->btrsnews->getRecord($full_news, 'news');
                // type casting, changing obj or std_class to array
                $news_record = (array) $news_record;
                //var_dump($news_record) ;
                //exit();
                $this->load->library('session');

                /*
                 *  saving session. because session is secure and will save on server side.
                 * takes 2 parameters. Key and Value
                 */

                $this->session->set_userdata('added_on', $news_record['added_on']);
                $this->session->set_userdata('isActive', $news_record['isActive']);
                $this->session->set_userdata('news', $full_news);
                //var_dump($news_record['isActive']);


                $data['success'] = 'yes';
                $this->load->view('news_form', $data);
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

}
