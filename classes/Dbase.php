<!-- All necesary database operation goes here -->

<?php

class Dbase {
    
    private $_host = "localhost";
    private $_user = "";
    private $_password = "";
    private $_dbname = "";
    
    public $db_conn=false;
    public $last_query = null;
    
    
    public function __construct() {
        $this->dbConnect();
    }
    
    public function dbConnect(){
        $this->db_conn = mysqli_connect($this->_host, $this->_user, $this->_password,  $this->_dbname);
        if(mysqli_connect_errno()){
            die("Mysql connection failed : ". mysqli_errno($this->db_conn));
        }
        mysqli_set_charset($this->db_conn, "utf8");
    }
    
    public function dbCloseConnect(){
        if($this->db_conn){
            mysqli_close($this->db_conn);
        }
    }
    
    
    public function query($sql){
        $this->last_query = $sql;
        $result = mysqli_query($this->db_conn, $sql);
        if(!$result){
            die("Database query failed ".mysqli_error($this->db_conn));
        }
        return $result;
    }
    
     public function fetchAll($sql){
        $result = $this->query($sql);
        $out = array();
        while($row = mysqli_fetch_assoc( $result)){
            $out[] = $row;
        }
        mysqli_free_result( $result);
        return $out;
    }
    
    
   
}
