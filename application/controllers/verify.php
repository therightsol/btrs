<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Verify extends CI_Controller {

    public function index() {
        
    }

    public function email() {

        if (isset($_GET['uid'])) {

            $uid_base64 = $_GET['uid'];

            if (!empty($uid_base64)) {
                // if base 64 user name is not empty and now we will decode this base64 encoding.
                // Step 1:
                // decoding uid and getting an encoded uid.
                $uid_encryptd = base64_decode($uid_base64);

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
                            echo 'Your email has been successfully validated. Now you can login and continue.';
                        } else {
                            echo 'Your account has already been activated .<br />ERROR 1002: contact to admin. OR TRY AGAIN';
                        }
                    } else {
                        // user not found. so show error.
                        echo 'ERROR 10001: Consult to admin.';
                    }
                } else {
                    // fail to decode. Possible reasons:
                    //  1)  encKey wrong.  // <-- this will never an issue. because we are getting same key that is used at the time of registeration.
                    //  2)  url changed.    // possible reason.

                    echo 'URL changed. kindly click on validate link again.';
                }
            } else {
                // uid is empty . show error.
                echo 'uid is empty';
            }
        } else {
            // NOT a GET response.
            $data['not_get'] = 'yes';
            echo 'Either you changed your URL or any internal error occour. <br /> Solution: Kindly click on validate link again.';
        }
    }

    public function password() {
        $data['page'] = '';
        $this->load->view('set_pass', $data);
    }

}
