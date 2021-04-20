<?php
class Package{
  
    // database connection and table name
    private $conn;
    private $table_name = "package";
  
    // object properties
    public $packageId;
    public $pname;
    public $packagePic;
  
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read products
function read(){
  
    // select all query
    $query = "SELECT * FROM `package`";
  
    // prepare query statement
    $stmt = $this->conn->prepare($query);
  
    // execute query
    $stmt->execute();
  
    return $stmt;
}
}
?>