<?php
class Feedback{
  
    // database connection and table name
    private $conn;
    private $table_name = "feedback";
  
    // object properties
    public $feedback;
    public $userEmail;
  
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
                feedback=:feedback, userEmail=:userEmail";
  
    // prepare query
    $stmt = $this->conn->prepare($query);
  
    // sanitize
    $this->feedback=htmlspecialchars(strip_tags($this->feedback));
    $this->userEmail=htmlspecialchars(strip_tags($this->userEmail));

  
    // bind values
    $stmt->bindParam(":feedback", $this->feedback);
    $stmt->bindParam(":userEmail", $this->userEmail);


  
    // execute query
    if($stmt->execute()){
        return true;
    }
  
    return false;
      
}

}
?>