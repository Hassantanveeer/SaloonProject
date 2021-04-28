<?php
class Slider{
  
    // database connection and table name
    private $conn;
    private $table_name = "slider";
    public $image;





    public function __construct($db){
        $this->conn = $db;
    }

    // read products
function read(){
  
    // select all query
    $query = "SELECT * FROM `slider`";
  
    // prepare query statement
    $stmt = $this->conn->prepare($query);
  
    // execute query
    $stmt->execute();
  
    return $stmt;
}
}
?>