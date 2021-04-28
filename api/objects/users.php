<?php
class User{
  
    // database connection and table name
    private $conn;
    private $table_name = "users";
  
    // object properties
    public $userEmail;
    public $token;
    public $userId;

   
  
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read products

// create product
function create(){
  
    // query to insert record
    
    
    $query = "INSERT INTO
                " . $this->table_name . "
            SET
                userEmail=:userEmail, token=:token,userId=:userId";
  
    // prepare query
    $stmt = $this->conn->prepare($query);
  
    // sanitize
    $this->name=htmlspecialchars(strip_tags($this->userEmail));
    $this->token=htmlspecialchars(strip_tags($this->token));
    $this->userId=htmlspecialchars(strip_tags($this->userId));
    
  
    // bind values
    $stmt->bindParam(":userEmail", $this->userEmail);
    $stmt->bindParam(":token", $this->token);
    $stmt->bindParam(":userId", $this->userId);


  
    // execute query
    if($stmt->execute()){
        return true;
    }
  
    return false;
      
}

}
?>