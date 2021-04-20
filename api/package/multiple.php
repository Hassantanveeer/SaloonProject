<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// get database connection
include_once '../config/database.php';
  
// instantiate product object
include_once '../objects/booking.php';
  
$database = new Database();
$db = $database->getConnection();
  
$product = new Book($db);
  
// get posted data
$data = json_decode(file_get_contents("php://input"));
  
// make sure data is not empty
if(
    !empty($data->userEmail) &&
    !empty($data->itemId) &&
    !empty($data->time) &&
    !empty($data->date) &&
    !empty($data->total) 

){
  
    // set product property values
    $product->userEmail = $data->userEmail;
    $product->itemId = $data->itemId;
    $product->time = $data->time;
    $product->date = $data->date;
    $product->total = $data->total;

    

    
    // create the product
    if($product->create()){
  
        // set response code - 201 created
        http_response_code(201);
  
        // tell the user
        echo json_encode(array("message" => "Booking Confirmed."));
    }
  
    // if unable to create the product, tell the user
    else{
  
        // set response code - 503 service unavailable
        http_response_code(503);
  
        // tell the user
        echo json_encode(array("message" => "Unable to Book."));
    }
}
  
// tell the user data is incomplete
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    // tell the user
    echo json_encode(array("message" => "Unable to Book. Data is incomplete."));
}
?>