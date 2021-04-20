<?php
class Booking{
  
    // database connection and table name
    private $conn;
    private $table_name = "booking";
  
    // object properties
    public $userEmail;
    public $description;
    public $time;
    public $date;
    public $total;
  
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
// create product
function create(){
  
    // query to insert record
    
    
    $query = "INSERT INTO
                " . $this->table_name . "
            SET
                userEmail=:userEmail, description=:description, time=:time, date=:date,total=:total";
  
    // prepare query
    $stmt = $this->conn->prepare($query);
  
    // sanitize
    $this->name=htmlspecialchars(strip_tags($this->userEmail));
    $this->description=htmlspecialchars(strip_tags($this->description));
    $this->time=htmlspecialchars(strip_tags($this->time));
    $this->date=htmlspecialchars(strip_tags($this->date));
    $this->total=htmlspecialchars(strip_tags($this->total));

  
    // bind values
    $stmt->bindParam(":userEmail", $this->userEmail);
    $stmt->bindParam(":description", $this->description);
    $stmt->bindParam(":time", $this->time);
    $stmt->bindParam(":date", $this->date);
    $stmt->bindParam(":total", $this->total);

  
    // execute query
    if($stmt->execute()){
        return true;
    }
  
    return false;
      
}

}
?>