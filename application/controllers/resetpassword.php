<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Resetpassword extends CI_Controller {

    public function index() {

        $data['page'] = 'Resetpassword';
        $data['emailFound'] = '';
        $rules = array(
            array('field' => 'email',
                'label' => 'Enter Email',
                'rules' => 'required|max_length[45]|valid_email|trim'
            )
        );
        $this->load->library('form_validation');
        $this->form_validation->set_rules($rules);

        if (!$this->form_validation->run() == FALSE) {
            $this->load->model('user');
            $uemail = $this->input->post('email', TRUE);

            $db_mail = $this->user->getRecord(FALSE, 'email');
            //var_dump($db_mail);
            //exit();

            $uemail_found = 'no';
            foreach ($db_mail as $key => $columns) {
                if ($columns['email'] == $uemail) {
                    $uemail_found = 'yes';
                }
            }
            if ($uemail_found == 'yes') {

                $data['emailFound'] = 'yes';


                $this->send_email($uemail);

                $this->load->view('re-pass', $data);
            } else {
                //echo 'email error';
                $data['emailFound'] = 'no';
                $this->load->view('re-pass', $data);
            }
        } else {
            $this->load->view('re-pass', $data);
        }
    }

    private function send_email($userEmail) {
        /*
         * Send Email is Pending
         *  i)  Confirmation of email account.
         *  ii) if email is confirmed by user by clicking on confirmation link then,
         *          -->     send email to Admin that a new user has been created. And set privilages for this user.
         */

        // Loading encryption library to encrypt username
        //$this->load->library('encrypt');
        // $this->load->model('basic_functions');
        //$encryptionKey = $this->basic_functions->getEncryptionKey();
        //exit($encryptionKey);
        // $encrypteUserName = $this->encrypt->encode($username, $encryptionKey);
        //echo($encrypteUserName) . '<br /><br />';
        //$base64userName = base64_encode($encrypteUserName);   // changing username to base64 algo.
        //echo $base64userName; exit();

        $message = '<strong> Hi! ' . ' </strong><br /><br />'
                . 'You Can change Your password. Kindly click on below link to change your password. <br />'
                . '<a href="' . base_url() . 'verify/password" > Click here </a>'
                . '<br /><br /><br /><br /><br /><br /><br /><hr />'
                . '<strong> ADMIN - BTRS </strong><br /><br />'
                . '<hr /> Thankyou for choosing us. <br /> <br />';

        $this->load->library('email');
        $success = $this->email->from('trsolutions.trainingcenter@gmail.com')
                ->reply_to('trsolutions.trainingcenter@gmail.com')
                ->to($userEmail)
                ->subject("Reset Your password | BTRS")
                ->message($message)
                ->set_mailtype('html')
                ->send();

        return $success;
    }

}
