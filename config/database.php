<?php
class Database{
 
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "rest-api";
    private $username = "root";
    private $password = "";
    public $conn;
    
    public function disconnect() {
		if (isset ( $this->conn ) && $this->conn) {
			mysqli_close ( $this->conn );
			unset ( $this->conn );
		}
	}
    
    public function getConnection() {
		$this->conn = null;
		$this->disconnect ();
		$this->conn = mysqli_connect ( $this->host, $this->username, $this->password );
		if (! $this->conn) {
			echo "Database Connection Failed : ";
			die ( "Database Connection Failed : " . mysqli_error ( $this->conn ) );
		} else {
			$db_select = mysqli_select_db ( $this->conn, $this->db_name );
			if (! $db_select) {
				echo "Database Select Failed : ";
				die ( "Database Select Failed : " . mysqli_error ( $this->conn ) );
			}
		}		
		return $this->conn;
	}
}

?>