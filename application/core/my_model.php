<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed'); 

class MY_Model extends CI_Model {

    const DB_TableName = 'users';
    const DB_TablePK = 'uid';

    public function insertRecord() { 
        //if(isset($this->DB_TablePK)){ echo 'hiiiiiiii';};
       // echo '<tt><pre>' . var_export($this, True) . '</pre></tt>';
        $this->db->insert($this::DB_TableName, $this);
        $this->{$this::DB_TablePK} = $this->db->insert_id();
         
        //echo $this->{$this::DB_TablePK};
        //if(isset($this->{$this::DB_TablePK})){ echo 'hiissdfsfiiiiii';};
        //echo '<tt><pre>' . var_export($this, True) . '</pre></tt>';
    }

    
    public function deleteRecord($columnName, $id) { 
        $success = FALSE;
        foreach($id as $key => $value){
            $this->db->where($columnName, $value);
            $success = $this->db->delete($this::DB_TableName); 
        } 
        return $success;
    }
    
    /**
     * Update record.
     * @param type $data is an array of data that is  need to update.
     * @param type $columnName is the column name where this data has to be updated
     * @param type $update_where is the id , where acutlly data has to be updated
     * @return type , 1 or nothing. if successful then it returns 1 else nothing.
     */
    public function updateRecord($columnName = 'customerID', $data='' , $update_where='', $nameOfUpdatingColumn=False) {
        if($nameOfUpdatingColumn){
            $data = array(
              $nameOfUpdatingColumn => $data,  
            );
            return $this->db->update($this::DB_TableName, $data, array($columnName => $update_where));
        }else{
            $this->db->update($this::DB_TableName, $data, array($columnName => $update_where));
            return $this->db->affected_rows();
        } 
    }
    
    /*
     * This function will get / fetch record for specific columns.
     * for example:
     * SELECT `userName`, `Name`, `PhoneNumber`, `EmailAddress` FROM `users` WHERE `isRegularCustomer` = 1
     * 
     * here, $columns is array that will contains DB_Column_Names
     *       $where_columnName is column name for where clause.
     *       $$whereValue is simply where value.
     */
    public function getSpecificColumnRec($columns = FALSE, $where_columnName = FALSE, $whereValue = FALSE){
        $this->db->select($columns);
        $query = $this->db->get_where($this::DB_TableName, array($where_columnName => $whereValue));
        return $query->result_array();
        
    }
    
    
    // SELECT * FROM username WHERE id = 5, -- (Specific user full record means, if user have multiple records (rows))
    public function getRecord($whereValue = False, $columnName = FALSE, $specific_user_fullRecord = False) {
        if ($whereValue) {
            $query = $this->db->get_where($this::DB_TableName, array($columnName => $whereValue));
            if($specific_user_fullRecord){
                return $query->result_array();
            }else{
               return $query->row(); 
            } 
        }else if($columnName){
            $this->db->select($columnName);
            $query = $this->db->get($this::DB_TableName); 
            return $query->result_array();
        } 
        
        $query = $this->db->get($this::DB_TableName);
        return $query->result_array();
    }
     
    public function getRecord_like($columnName, $pattern, $just_LIKE = FALSE){
        
        if($just_LIKE){
            $sql = "SELECT * FROM " .$this::DB_TableName. " WHERE " . $columnName. " LIKE '". $pattern . "'"; 
            $query = $this->db->query($sql); 
            return $query->result_array();
        }
        
        $sql = "SELECT * FROM " .$this::DB_TableName. " WHERE " . $columnName. " LIKE '%". $pattern . "%'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function getRecord_whereClause($firstColumn = FALSE, $firstMatchValue = FALSE, $secondColumn = FALSE, $secondMatchValue = FALSE){
        $sql = "SELECT * FROM " . $this::DB_TableName ." WHERE " . $firstColumn . " = '" . $firstMatchValue . "' AND " . $secondColumn . " = '"  . $secondMatchValue . "'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
   
    /**
     * This function will fetch all data OR limited data from Database.
     * This function will take table name from where data will fetch.
     * @param type $tableName, string that contain the table name.
     * @param type $limit_start, integer type, if set then this is starting point of fetching records from DB
     * @param type $limit_end, integer type, if set then this is end point of fetching records from DB
     * @return type, array of data.
     */
    public function get_all_Record_withTable($tableName = FALSE, $limit_end = FALSE, $limit_start = 0, $columnName = False, $sort = FALSE, $columAndvalues = FALSE) { 
        if($columAndvalues){
            $query = $this->db->where($columAndvalues);
            $query = $this->db->get($tableName, $limit_end, $limit_start); 
            return $query->result_array();
        }
        
        if($limit_end){
            $query = $this->db->get($tableName, $limit_end, $limit_start);
            return $query->result_array();
        }else if($tableName && $columnName && $sort){
            $this->db->order_by($columnName, $sort); 
            $query = $this->db->get($tableName);
            return $query->result_array();
        }else{ 
            $query = $this->db->get($tableName);
            return $query->result_array();
        }
        
    } 
    
    /**
     * This function will tell how many rows are there in a table.
     * This function take a string type argument that have table name.
     * @param type $tableName, string that contain the table name.
     * @return type, return how many rows are in that table.
     */
    public function getNumber_of_rows($tableName, $columnName = FALSE, $where_value = FALSE, $customQuery = FALSE, $columAndvalues = FALSE, $tableName = FALSE ){
        
        // if there is any special case, in which we want to fetch data with custom query.
        // then we will use customQuery as True. and so, this block of code will execute.
        // we must have to provide some column names and their values.
        //
        // currently used to fetch customers data to display view all customers data.
        if($customQuery && $columAndvalues && $tableName){
            $query = $this->db->where($columAndvalues);
            $query = $this->db->get($tableName);
             
            return $query->num_rows();
        }
        
        // if we want to fetch number of rows with some kind of limitation than
        // we can give columnName and whereValue.
        
        if($columnName && $where_value){
             
            $query = $this->db->get_where($this::DB_TableName, array($columnName => $where_value));
            return $query->num_rows();
        }
        
        // If we want to fetch total number of arrays in a table.
        
        $query = $this->db->get($this::DB_TableName);
        return $query->num_rows();
    }
 
}

?>