<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usertype extends MY_Model {       // MY_MODEL is core file

    /**
     * Table Name and Primary key to perform CRUD operations.
     */

    const DB_TableName = 'user_types';
    const DB_TablePK = 'ut_id';

    /**
     *  Variable to Store username provided. choosed by user
     * @var integer 
     */
    public $username = '';

    /**
     *  
     */
    public $isAdmin = '';

    /**
     *  
     */
    public $isManager = '';

    /**
     *  
     */
    public $isCall_operator = '';

    /**
     *  Variable to store email address of the person (customer, admin etc.)
     *  @var string 
     */
    public $isDriver = '';

    /**
     *  Variable to store email address of the person (customer, admin etc.)
     *  @var string 
     */
    public $isBussHostess = '';

    /**
     *  Variable to store email address of the person (customer, admin etc.)
     *  @var string 
     */
    public $isDoctor = '';

    /**
     *  Variable to store email address of the person (customer, admin etc.)
     *  @var string 
     */
    public $isSecurity_gaurd = '';
    public $isCustomer = '';
    
}

?>