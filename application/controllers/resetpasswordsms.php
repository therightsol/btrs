<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Resetpasswordsms extends CI_Controller {

    public function index() {

        $data['page'] = 'Resetpasswordsms';
        $data['emailFound'] = '';
        $data['active_not'] = '';
        $data['key_gen'] = '';
        $data['email_send'] = '';//yeah del krna ha
        $data['success_smsmail'] = '';
        $data['code_matched']= '';
        $data['form_validate']= '';
        
        $rules = array(
            array(
                'field' =>'email_sms',
                'label' => 'Enter Email',
                'rules' => 'required|max_length[45]|valid_email|trim'
            )
        );
        $this->load->library('form_validation');
        $this->form_validation->set_rules($rules);
        
        if (!$this->form_validation->run() == FALSE) {
            $this->load->model('user');
            $uemail = $this->input->post('email_sms', TRUE); 
            
            $db_mail = $this->user->getRecord(FALSE, 'email');
             $uemail_found = 'no';
            foreach ($db_mail as $key => $columns) {
                if ($columns['email'] == $uemail) {
                    $uemail_found = 'yes';
                }
            }
             if ($uemail_found == 'yes') {
                 
                 $cols = ['isactive', 'fullname' , 'home_number'];
                 
                 $rec = $this->user->getSpecificColumnRec($cols, 'email', $uemail);
                 //var_export($rec);
                                     //exit();
                 if($rec[0]['isactive'] == '1'){
                        $this->load->model('basic_functions');
                        $key_sms = $this->basic_functions->getSMS_key();
                        $this->session->set_userdata('smskey', $key_sms);
                        $this->session->set_userdata('email', $uemail);
                        $this->session->set_userdata('home_number', $rec[0]['home_number']);
                         
                      // echo $number;
                              // exit();
                        $key_gen = 'yes';
                        $data[$key_gen] = 'yes';
                        if($key_gen == 'yes'){
                            $myemail="sam2419sms@gmail.com";
                            $number = $this->session->userdata('home_number');
                            $success = $this->send_email($myemail ,$key_sms , $number);
                            
                            
                            if($success){
                                $data['success_smsmail'] = 'yes';
                                $this->load->view('restpass_sms' , $data);
                                 
                                    
                                     
                                     
                                
                                
                                
                            }else{
                             //echo 'not send email';  
                             $data['success_smsmail'] = 'no';
                              $this->load->view('restpass_sms' , $data);
                            }
                            
                            
                        }else{
                           // <!--if code not genrate -->
                            
                            $this->load->view('restpass_sms' , $data);
                           
                        }
                 }else{
                     //echo'email not acivate';
                     $data['active_not'] = 'no';
                      $this->load->view('restpass_sms' , $data);
                 }

             }else{
                 $data['emailFound'] = 'no';
                 $this->load->view('restpass_sms' , $data);
                // echo 'user not found';
             }
            
        }else{
            //echo "validations fail";
            $this->load->view('re-pass' , $data);
        }
}
 public function codeverification() {
     $data['page'] = 'Resetpasswordsms';
     $data['key_gen'] = '';
     $data['code_matched']= '';
     $data['active_not'] = '';
       $data['update_success'] = '';
     $data['empatymail'] = '';
     $data['success_smsmail'] = '';
     $data['emailFound'] = '';
     $data['form_validate']= '';
    
      
      $code =$this->input->post('code', True);
      $key_sms = $this->session->userdata('smskey');
                  //echo $key_sms;
                       //exit();
        if($code == $key_sms){
            //echo $key_sms;
                       //exit();
             if(filter_input_array(INPUT_POST)){
                 $this->load->view('set_pass2', $data);
                 //echo 'code matched now u can procedue further';
                 
                 
                 //echo $email;
             }else{
                echo 'not post'; 
             }
                                        
                }else{
                    //echo 'code not matched';
                    $data['code_matched'] = "no";
                    $this->load->view('restpass_sms', $data);
                           }
     
 }
 public function resetpassword() {
     $data['page'] = '';
     $data['update_success'] = '';
     $data['empatymail'] = '';
     $data['success_smsmail'] = '';
     $data['emailFound'] = '';
     $data['active_not'] = '';
     $data['form_validate']= '';
     
     if(filter_input_array(INPUT_POST)){
         $uemail = $this->session->userdata('email');
         //echo $uemail;
         //exit();
          if (!empty($uemail)) {
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
                       //echo $uemail;
                         //exit();
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
                        $rows = $this->user->updateRecord('email', $newData, $uemail);
                       
                        
                        if ($rows == 1) {
                            $data['update_success'] = 'yes';
                             $this->load->view('set_pass2', $data);
                            //echo 'Your password has been updated.';
                            $url = base_url() . 'login';
                            header( "refresh:3; url=$url" );
                        } else {
                            $data['update_success'] = 'no';
                            //echo 'Some internal error occur. Kindly retry.';
                             $this->load->view('set_pass2', $data);
                        }
                    } else {
                        // if validation fail.
                        $data['form_validate']= 'no';
                         $this->load->view('set_pass2', $data);
                        //echo 'password validation fail. [Show in view file.]';
                    }
                }else {
                    // plain email is empty
                     $data['empatymail'] = 'no';
                     $this->load->view('set_pass2', $data);
                }
     
     
 }else{
     $this->load->view('set_pass2', $data);
 }
 }
 
private function send_email($myemail, $key_sms , $number) {
    
    
 $message = $key_sms; 
                
                

        
        $this->load->library('email');
        $success = $this->email->from('trsolutions.trainingcenter@gmail.com')
                ->reply_to('trsolutions.trainingcenter@gmail.com')
                ->to($myemail)
                ->subject($number)
                ->message($message)
                ->set_mailtype('text')
                ->send();

        return $success;
    }
}
?>