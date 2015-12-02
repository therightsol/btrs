<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{
    
    public function index(){
        $this->load->helper('form');
        
        $data['page'] = 'register';
        $data['userFound'] = '';
        $data['emailFound'] = '';
        $data['success'] = '';
        
        if($_POST){
            
            //echo $this->input->post('username');
            
            $rules = array(
                array(
                    'field' =>  'username',
                    'label' =>  'User Name',
                    'rules' =>  'required|max_length[15]|min_length[3]|trim'
                ),
                array(
                    'field' =>  'fullname',
                    'label' =>  'Full Name',
                    'rules' =>  'required|max_length[45]|min_length[3]|trim'
                ),
                array(
                    'field' =>  'email',
                    'label' =>  'Enter Email',
                    'rules' =>  'required|max_length[45]|valid_email|trim'
                ),
                array(
                    'field' =>  'confemail',
                    'label' =>  'Confirm Email',
                    'rules' =>  'required|max_length[45]|matches[email]|trim'
                ),
                array(
                    'field' =>  'password',
                    'label' =>  'Password',
                    'rules' =>  'required|max_length[45]|min_length[8]|trim'
                ),
                array(
                    'field' =>  'con_password',
                    'label' =>  'Confirm Password',
                    'rules' =>  'required|max_length[45]|matches[password]|trim'
                ),
                array(
                    'field' =>  'phone',
                    'label' =>  'Enter Your Contact Number',
                    'rules' =>  'required|exact_length[13]|trim'
                )                
            );
            
            
            $this->load->library('form_validation');
            $this->form_validation->set_rules($rules);
            
            if(!$this->form_validation->run() == FALSE){
                // form is validate and we can now proceed further
                
                // 1) cheking username . 
                $un = strtolower($this->input->post('username', TRUE));
                
                $this->load->model('user');
                $db_usernames = $this->user->getRecord(FALSE, 'username');
                
                // checking is username found or not.
                $un_found = 'no';
                foreach($db_usernames as $key => $columns){
                    if($columns['username'] == $un)
                        $un_found = 'yes';
                }
                
                if($un_found == 'no'){
                    // user not found, so continue.
                    
                    // Step 1: Send Email
                    
                    $uemail = $this->input->post('email', TRUE);
                     $db_email = $this->user->getRecord(FALSE, 'email');
                     
                    
                    $is_success = $this->send_email($un, $uemail);
                    
                    $uemail_found = 'no';
					foreach($db_email as $key => $columns){
						if($columns['email'] == $uemail)
							$uemail_found = 'yes';
					}
                
					if($uemail_found == 'no'){
						
						// saving into db.
						if($is_success){
							// saving into DB
								
								// 1) getting user input
							
									// post ('fieldName' , Trim (True or False) 
									$fullName = $this->input->post('fullname', TRUE);
									// Trim --> ali //ali

									$plain_pass = $this->input->post('password', TRUE);
									$city = $this->input->post('city', TRUE);
									$state = $this->input->post('state', TRUE);
									$street = $this->input->post('street', TRUE);
									$country = $this->input->post('countries', TRUE);
									$phone = $this->input->post('phone', TRUE);
									
									
									$homeAddress = $street . ', ' . $city . ', ' . $state . ', ' . $country;
								
								//2) Hashing user password
									
									// HASHING for passwords.
									$options = [
										'cost' => 10
									]; 
									$hashedPassword = password_hash($plain_pass, PASSWORD_BCRYPT, $options);
									//echo $plain_pass . '<br />';
									//exit($hashedPassword);
									
									
								//3) saving into DB   
									
									// a) populating values
									$this->user->username = $un;
									$this->user->fullname = $fullName;
									$this->user->email = $uemail;
									$this->user->password = $hashedPassword;
									$this->user->home_address = $homeAddress;
									$this->user->home_number = $phone; 
									
									// b) saving into DB
									
									$this->user->insertRecord();
							
							//4) show success message / load view page
									
							$data['success'] = 'yes';
							
							$this->load->view('reg_form', $data);
						}
					
					   else{
							  exit('email not sent');
							}
				}else {
					// email found. show error that email should unique.
                    $data['emailFound'] = 'yes';
                    $this->load->view('reg_form', $data);
					
				}
			}else{
				// user found. show error. user already available.
				$data['userFound'] = 'yes';
				$this->load->view('reg_form', $data);
			}
		}else{
			// show errors. form not validate.
			//echo validation_errors();
			$this->load->view('reg_form', $data);
		}
		}else{
			// if not post then show form.
                    $this->load->view('reg_form', $data);
        }
        
    }// function close
    
    private function send_email($username, $userEmail){
        /*
         * Send Email is Pending
         *  i)  Confirmation of email account.
         *  ii) if email is confirmed by user by clicking on confirmation link then,
         *          -->     send email to Admin that a new user has been created. And set privilages for this user.
         */

        // Loading encryption library to encrypt username
        $this->load->library('encrypt');

        $this->load->model('basic_functions');
        $encryptionKey = $this->basic_functions->getEncryptionKey();
        //exit($encryptionKey);
        
        $encrypteUserName = $this->encrypt->encode($username, $encryptionKey);
        //echo($encrypteUserName) . '<br /><br />';
        
        
        $base64userName = base64_encode($encrypteUserName);   // changing username to base64 algo.
        //echo $base64userName; exit();

        $message = '<strong> Welcome! ' . $username . ' </strong><br /><br />'
                . 'You are successfully registered. Kindly click on below link to activate your account. <br />'
                . '<a href="' . base_url() . 'verify/email?uid=' . $base64userName . '" > Click here to activate </a>'
                . '<br /><br /><br /><br /><br /><br /><br /><hr />'
                . '<strong> ADMIN - BTRS </strong><br /><br />'
                . '<hr /> Thankyou for choosing us. <br /> <br />';

        $this->load->library('email');
        $success = $this->email->from('trsolutions.trainingcenter@gmail.com')
                ->reply_to('trsolutions.trainingcenter@gmail.com')
                ->to($userEmail)
                ->subject("Activiate your account | BTRS")
                ->message($message)
                ->set_mailtype('html')
                ->send();
        
        return $success;
    }
}

