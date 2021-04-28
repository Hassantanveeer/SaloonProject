<?php
class BookingList{
  
    // database connection and table name
    private $conn;
    private $table_name = "booking";
    public $id;
    public $firestoreId;
    public $userEmail;
    public $description;
    public $time;
    public $total;
    public $date;
    public $service;
    public $status;





    public function __construct($db){
        $this->conn = $db;
    }

    // read products
function read(){
  
    // select all query
    $query = "SELECT * FROM `booking`";
  
    // prepare query statement
    $stmt = $this->conn->prepare($query);
  
    // execute query
    $stmt->execute();
  
    return $stmt;
}
}
?>