<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends MY_Model {       // MY_MODEL is core file

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'users';
    const DB_TablePK = 'uid';
    
        
    /**
     *  Variable to Store username provided. choosed by user
     * @var integer 
     */
    public $username = '';

    /**
     *  Variable to store full name of the person (customer, admin etc.)
     *  @var string 
     */
    public $fullname = '';
	 
    /**
     *  Variable to store phone number of the person (customer, admin etc.)
     *  @var string 
     */
    public $email = '';

    /**
     *  Variable to store email address of the person (customer, admin etc.)
     *  @var string 
     */
    public $backup_email = '';
    
    /**
     *  Variable to store email address of the person (customer, admin etc.)
     *  @var string 
     */
    public $password = '';

    /**
     *  Variable to store email address of the person (customer, admin etc.)
     *  @var string 
     */
    public $passwordSalt = '';
     
    /**
     *  Variable to store email address of the person (customer, admin etc.)
     *  @var string 
     */
    public $home_address = '';

    /**
     *  Variable to store email address of the person (customer, admin etc.)
     *  @var string 
     */
    public $home_number = '';
    
    /**
     *  Variable to store email address of the person (customer, admin etc.)
     *  @var string 
     */
    public $backup_phnum = '';
    
    /**
     *  Variable to store email address of the person (customer, admin etc.)
     *  @var string 
     */
    public $isactive = '';
    
    /**
     *  Variable to store email address of the person (customer, admin etc.)
     *  @var string 
     */
    public $isEnable_tsv = '';
    
    /**
     *  Variable to store email address of the person (customer, admin etc.)
     *  @var string 
     */
    public $is_bcdownloaded = '';
    
    /**
     *  Variable to store email address of the person (customer, admin etc.)
     *  @var string 
     */
    public $bcd_timestamp = '';
    
    /**
     *  Variable to store email address of the person (customer, admin etc.)
     *  @var string 
     */
    public $pass_updated = '';
    
    /**
     *  Variable to store email address of the person (customer, admin etc.)
     *  @var string 
     */
    public $profilepic = '';
    
}

?>