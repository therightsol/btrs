<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Basic_Functions {

    public function getDateTime($format = FALSE) {
        date_default_timezone_set('Asia/Karachi');
        if($format){
            $reqDate = date($format);
        }else{
            $reqDate = date('D d-M-Y -- g:i:s A');
        }
         
        return $reqDate;
    }
    
    public function getPasswordSalt() {
        $charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        $result = '';

        for ($i = 0; $i < 14; $i++) {
            $result .= $charset[mt_rand(0, 61)];
        }

        return $result;
    }
    
    public function getFormattedDate($date){  
        $date_unix = strtotime($date);  
        $date = date('D d-M-Y', $date_unix);  
        return $date;
    } 
    
    public function getUnixTime($date){
        $date_unix = strtotime($date); 
        return $date_unix;
    }
    
    public function secureString_adminCookie(){ 
         return '7f!R%t?*8jq<7&S$KP?!6?ho$Q>H3%)>';
    } 
    
    public function getEncryptionKey(){
        return 'k`K=y<-#PUXk{/_Y<-n\`f,:)%R+4';
    }
}
