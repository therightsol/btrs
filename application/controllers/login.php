<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
    }

    public function index() {
        $data['page'] = 'login';
        $data['userfound'] = '';
        $data['active_email'] = '';
        $data['password_found'] = '';

        if ($_POST) {
            $rules = array(
                array(
                    'field' => 'username',
                    'label' => 'User Name',
                    'rules' => 'required|max_length[15]|min_length[3]|trim'
                ),
                array(
                    'field' => 'us_passwrod',
                    'label' => 'Password',
                    'rules' => 'required|max_length[45]|min_length[3]|trim'
                )
            );



            $this->load->library('form_validation');
            $this->form_validation->set_rules($rules);

            if (!$this->form_validation->run() == FALSE) {
                // form is validate and we can now proceed further
                // 1) cheking username . 
                $un = strtolower($this->input->post('username', TRUE));

                $this->load->model('user');
                $db_usernames = $this->user->getRecord(FALSE, 'username');

                // checking is username found or not.
                $un_found = '';
                foreach ($db_usernames as $key => $columns) {
                    if ($columns['username'] == $un) {
                        $un_found = 'yes';
                    }
                }
                if ($un_found == '') {

                    $data['userfound'] = 'no';
                    $this->load->view('login_form', $data);
                } else {
                    // user found. show error. user already available.

                    $user_record = $this->user->getRecord($un, 'username');
                    // type casting, changing obj or std_class to array
                    $user_record = (array) $user_record;

                    //echo '<tt><pre>' . var_export($user_record, True) . '</tt></pre>';exit;

                    $dbPass = $user_record['password'];
                    $db_username = $user_record['username'];

                    $password = $this->input->post('us_passwrod', True);


                    if ($un == $db_username && password_verify($password, $dbPass)) {
                        $this->load->model('usertype');
                        $usertype = $this->usertype->getRecord($un, 'username');
                        $usertype = (array) $usertype;
                        //$usertype_name = $usertype['userame'];
                        $status = $usertype['isAdmin'];
                        // if password and dbPass is equal / matched

                        if ($user_record['isactive'] == '1') {

                            $this->load->library('session');

                            /*
                             *  saving session. because session is secure and will save on server side.
                             * takes 2 parameters. Key and Value
                             */
                            $this->session->set_userdata('username', $un);
                            $this->session->set_userdata('fullname', $user_record['fullname']);
                            $this->session->set_userdata('email', $user_record['email']);
                            $this->session->set_userdata('homenumber', $user_record['home_number']);



                            if ($status == '1') {
                                redirect('adminpanel');
                                $this->load->library('session');

                                $this->session->set_userdata('isAdmin', $status);
                            } elseif ($status == '0') {
                                redirect('member');
                            }
                            // its means that email is active .
                            //$user_type = $this->usertype->getRecord();
                            // type casting, changing obj or std_class to array
                            //$user_type = (array) $user_type;
                            //var_dump($status);
                            //exit();
                            // setting and loading session library.
                            //load model
                            // echo'<tt><pre>' . var_export($db_usertype[0]['username'] , True) . '</tt></pre>'; exit();
                            //echo $value['username'];
                            //exit();
                            //}
                        } else {
                            // email is not active.
                            $data['active_email'] = 'no';
                            $this->load->view('login_form', $data);
                            echo 'Your email is not active. kindly activate your account before continue.';
                        }
                    } else {
                        // show error, password wrong
                        $data['password_found'] = 'no';
                        $this->load->view('login_form', $data);
                        //echo 'password is wrong';
                    }
                }
            } else {

                // show errors. form not validate.
                //echo validation_errors();
                $this->load->view('login_form', $data);
            }
        } else {
            $this->load->view('login_form', $data);
        }
    }

}
