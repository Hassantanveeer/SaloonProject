<?php
class Item{
  
    // database connection and table name
    private $conn;
    private $table_name = "item";
  
    // object properties
    public $itemId;
    public $itemName;
    public $itemPrice;
    public $packageId;
   
  
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read products
function read($id){
  
    // select all query
    $query = "SELECT * FROM `item` where packageId='$id'";
  
    // prepare query statement
    $stmt = $this->conn->prepare($query);
  
    // execute query
    $stmt->execute();
  
    return $stmt;
}
}
?>