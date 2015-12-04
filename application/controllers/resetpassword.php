<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Resetpassword extends CI_Controller {

    public function index() {

        $data['page'] = 'Resetpassword';
        $data['emailFound'] = '';
        $rules = array(
            array('field' =>'email',
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
                // email is found so continue.
                
                
                // getting record from users table
                $cols = ['isactive'];
                
                /*
                 * NOTE: it will give us full record. 
                 * Debug and get just isactive column.
                 */
                $rec = $this->user->getRecord($uemail, 'email');
                
                $email_active = ''; 
                
                /*
                 * check is email active or not.
                 * if active then continue to send email else show error. 
                 * That account is not active.
                 */
                if($email_active == 'yes'){
                    // email found and email is active.
                    
                    /*
                     * send email
                     */
                    
                    
                    
                    $data['emailFound'] = 'yes';
                    $this->send_email($uemail);

                    $this->load->view('re-pass', $data);
                }else {
                    // email is not active.
                } 
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
         * FLOW:
         *  1)  encrypt email.
         *  2)  encode with base64
         *  3)  make link   --  $root . 'controler/function/' . $encoded_email;
         *  4)  send this link to $userEmail with some msg that click on link to change password.
         *  5)  user clicks on link.
         *  6)  is parameter (encoded email) found and not empty.
         *          IF FOUND
         *          ->  decode base 64
         *          ->  decrypt and get original email.
         *          -> check if this email is available in DB.
         *              -> if available continue to reset STEP __7__
         *              -> else show error . 
         *      -> IF NOT
         *          -> show error.
         *
         *  7)  load view to display reset password form like below;
         *      ------------
         *      ------------            Password
         * 
         *      ------------
         *      ------------            Retype Password
         * 
         * 
         *  8)  Validate password according to Register controller or our old logic.    
         *          ->  (Show error if not validate)
         *          ->  form populate ... set_value
         *  9)  if validate success.
         *      -> Hashing password
         *      -> saving into DB.
         *      -> Send email that your password has been updated. If this is not you contact to admin
         * 
         */ 
        
        $message = '';

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
