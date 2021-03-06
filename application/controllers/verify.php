<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Verify extends CI_Controller {

    public function index() {
        
    }

    public function email() {
        $data['page'] = "emailverify";
        $data['uid'] = "";
        $data['verify'] = '';
        $data['userFound'] = "";
        $data['userFound'] = "";
        $data['get_uid'] = "";

        if (isset($_GET['uid'])) {

            $uid_base64 = $_GET['uid'];

            if (!empty($uid_base64)) {
                // if base 64 user name is not empty and now we will decode this base64 encoding.
                // Step 1:
                // decoding uid and getting an encoded uid.
                $uid_encryptd = base64_decode($uid_base64);
                $uid_base64 = 'yes';
                //echo $uid_encryptd;
                // Step: 2:     decrypt username with Private Key (Random String)
                // because this string is saved in basic functions. So, first load basic functions and then get that key.
                // Part A:
                $this->load->model('basic_functions');
                $encKey = $this->basic_functions->getEncryptionKey();


                // Part B:
                $this->load->library('encrypt');
                $uid = $this->encrypt->decode($uid_encryptd, $encKey);

                if (!empty($uid)) {
                    // uid decoded successfully. so continue.
                    //echo $uid;

                    $this->load->model('user');

                    // getting all usernames from user table
                    $db_users = $this->user->getRecord(FALSE, 'username');


                    /*
                     * if user founds in DB. then update record / validate email. Else show error.
                     */
                    $userFound = '';

                    foreach ($db_users as $key => $value) {
                        //echo ($value['username']) . '<br />';

                        if ($value['username'] == $uid) {
                            $userFound = 'yes';
                        }
                    }

                    if (!empty($userFound)) {
                        // user found so continue to update.
                        //$columnName = 'customerID', $data='' , $update_where=''
                        // creating an array that contains new data.

                        $newData = [
                            'isactive' => '1'
                        ];

                        $success = $this->user->updateRecord('username', $newData, $uid);


                        if ($success == 1) {
                            $data['verify'] = 'yes';
                            $this->load->view('email_verify', $data);
                            //echo 'Your email has been successfully validated. Now you can login and continue.';
                        } else {
                            $data['verify'] = 'no';
                            $this->load->view('email_verify', $data);

                            // echo 'Your account has already been activated .<br />ERROR 1002: contact to admin. OR TRY AGAIN';
                        }
                    } else {
                        // user not found. so show error.
                        $data['userFound'] = "no";

                        $this->load->view('email_verify', $data);
                        //echo 'ERROR 10001: Consult to admin.';
                    }
                } else {
                    // fail to decode. Possible reasons:
                    //  1)  encKey wrong.  // <-- this will never an issue. because we are getting same key that is used at the time of registeration.
                    //  2)  url changed.    // possible reason.
                    $data['uid'] = "no";

                    $this->load->view('email_verify', $data);
                    // echo 'URL changed. kindly click on validate link again.';
                }
            } else {
                $data['uid'] = "null";

                $this->load->view('email_verify', $data);

                // uid is empty . show error.
                // ERROR 10004: Consult to admin;
            }
        } else {
            // NOT a GET response.
            $data['get_uid'] = "no";

            $this->load->view('email_verify', $data);
            //echo 'Either you changed your URL or any internal error occour. <br /> Solution: Kindly click on validate link again.';
        }
    }

}
