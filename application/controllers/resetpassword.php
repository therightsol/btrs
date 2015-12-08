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
                $cols = ['isactive', 'fullname'];
                //($columns = FALSE, $where_columnName = FALSE, $whereValue = FALSE)
                /*
                 * NOTE: it will give us full record. 
                 * Debug and get just isactive column.
                 */
                $rec = $this->user->getSpecificColumnRec($cols, 'email', $uemail);
                
                //echo '<tt><pre>' . var_export($rec, TRUE) . '</pre></tt>';
                //echo $rec[0]['fullname'];
                //exit;
                
                /*
                 * check is email active or not.
                 * if active then continue to send email else show error. 
                 * That account is not active.
                 */
                
                // if email is active || [1]
                if($rec[0]['isactive'] == '1'){
                    // email found and email is active.
                    
                    /*
                     * send email
                     */
                    
                    
                    
                    
                    $success = $this->send_email($uemail, $rec[0]['fullname']);
                    
                    if($success){
                        $data['email_send'] = 'yes';
                        echo 'email sent . kindly check your email to continue.';
                        //$this->load->view('re-pass', $data);
                    }else {
                        /*
                         * it is totally up to our server or server setting if email not sent.
                         */
                        $data['email_send'] = 'no';
                        echo 'email not sent. some internal error occur.';
                        //$this->load->view('re-pass', $data);
                    }
                    
                }else {
                    // email is not active.
                    echo 'email not active. <br /> Kindly validate your email before continue.';
                    
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
    
    public function reset(){
        $data['page'] = 'Resetpassword';
        
        // check if post    === $_POST
        if(filter_input_array(INPUT_POST)){
            
            $email_base64 = $_GET['email'];
            if (!empty($email_base64)) {
                // if base 64 email is not empty and now we will decode this base64 encoding.
                // Step 1:
                // decoding email and getting an encoded email.
                $email_encryptd = base64_decode($email_base64);


                $this->load->model('basic_functions');
                $encKey = $this->basic_functions->getEncryptionKey();

                // Part B:
                $this->load->library('encrypt');
                $email = $this->encrypt->decode($email_encryptd, $encKey);

                if (!empty($email)) {
                    // email decoded successfully. AND its a post request, so continue.
                    //echo $email;

                    $rules = array(
                        array(
                            'field' => 'password',
                            'label' => 'Password',
                            'rules' => 'required|max_length[45]|min_length[8]|trim'
                        ),
                        array(
                            'field' => 're_password',
                            'label' => 'Confirm Password',
                            'rules' => 'required|max_length[45]|matches[password]|trim'
                        )
                    );

                    $this->load->library('form_validation');
                    $this->form_validation->set_rules($rules);

                    if (!$this->form_validation->run() == FALSE) {
                        // if validation pass

                        $plainPass = $this->input->post('password', TRUE);
                        // HASHING for passwords.
                        $options = [
                            'cost' => 10
                        ];
                        $hashedPassword = password_hash($plainPass, PASSWORD_BCRYPT, $options);




                        $newData = [ 'password' => $hashedPassword];

                        $this->load->model('user');
                        // updating on email behalf
                        $rows = $this->user->updateRecord('email', $newData, $email);
                        
                        if ($rows == 1) {
                            $data['update_success'] = 'yes';
                            echo 'Your password has been updated.';
                            $url = base_url() . 'login';
                            header( "refresh:3; url=$url" );
                        } else {
                            echo 'Some internal error occur. Kindly retry.';
                        }
                    } else {
                        // if validation fail.
                        echo 'password validation fail. [Show in view file.]';
                    }
                }else {
                    // plain email is empty
                }
            }else {
                // base 64 email not found in url
            } 
        }else {
            $this->load->view('set_pass', $data);
        } 
    }
    
    

    private function send_email($email, $name) {
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
        
        // Loading encryption library to encrypt username
        $this->load->library('encrypt');

        $this->load->model('basic_functions');
        $encryptionKey = $this->basic_functions->getEncryptionKey();
        //exit($encryptionKey);
        
        $encryptedEmail = $this->encrypt->encode($email, $encryptionKey);
        //echo($encrypteUserName) . '<br /><br />';
        
        
        $base64email = base64_encode($encryptedEmail);   // changing email to base64 algo.
        
        $url = base_url() . 'resetpassword/reset?email=' . $base64email;
        //exit($url);
        
        $message = '<strong>Hello Dear, ' . $name . ' !</strong>'
                . '<br /><hr />'
                . 'You recently requested to change your  password. If it was you then click on '
                . 'following link.<br />'
                . '<a href=' . $url . '>Reset Your Password</a>' 
                . '<br /><hr />'
                . '<strong>If you didnt requested to change your password. Just ignore this email.</strong>';

        
        $this->load->library('email');
        $success = $this->email->from('trsolutions.trainingcenter@gmail.com')
                ->reply_to('trsolutions.trainingcenter@gmail.com')
                ->to($email)
                ->subject("Reset Your password | BTRS")
                ->message($message)
                ->set_mailtype('html')
                ->send();

        return $success;
    }

}
