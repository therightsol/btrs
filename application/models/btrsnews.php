<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Btrsnews extends MY_Model {       // MY_MODEL is core file

    /**
     * Table Name and Primary key to perform CRUD operations.
     */

    const DB_TableName = 'news';
    const DB_TablePK = 'nid';

    /**
     *  Variable to Store username provided. choosed by user
     * @var integer 
     */
    public $news = '';

    /**
     *  Variable to store full name of the person (customer, admin etc.)
     *  @var string 
     */
    public $added_by = '';

    /**
     *  Variable to store phone number of the person (customer, admin etc.)
     *  @var string 
     */
    public $added_on = '';

    /**
     *  Variable to store email address of the person (customer, admin etc.)
     *  @var string 
     */
    public $isModified = '';

    /**
     *  Variable to store email address of the person (customer, admin etc.)
     *  @var string 
     */
    public $lastModified = '';

    /**
     *  Variable to store email address of the person (customer, admin etc.)
     *  @var string 
     */
    public $modifiedBy = '';

    /**
     *  Variable to store email address of the person (customer, admin etc.)
     *  @var string 
     */
    public $isActive = '';

    /**
     *  Variable to store email address of the person (customer, admin etc.)
     *  @var string 
     */
}

?>