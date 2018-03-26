<?php
class User{
 
    private $conn;
    private $table_name = "user";

    public $id;
    public $name;
    public $middlename;
    public $lastname;   
    
    public function __construct($db){
        $this->conn = $db;
    }
    
    // read products
    function read(){
    	$query = "SELECT
                *
            FROM
                " . $this->table_name ;		
    	$stmt = mysqli_query ( $this->conn, $query );		
    	return $stmt;
    }
}