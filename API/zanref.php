<?php
include_once './config/database.php';
require "../vendor/autoload.php";
use \Firebase\JWT\JWT;

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET,POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


$secret_key = "7EqBDh5em8UOI8WXmeS";
$jwt = null;
$databaseService = new DatabaseService();
$conn = $databaseService->getConnection();

$data = json_decode(file_get_contents("php://input"));

// $authHeader =null;

$authHeader = $_SERVER['HTTP_AUTHORIZATION'];
// echo $auth2;


// $authHeader = 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJUSEVfSVNTVUVSIiwiYXVkIjoiVEhFX0FVRElFTkNFIiwiaWF0IjoxNjE4MzE2MDk4LCJkYXRhIjp7ImlkIjoiMSIsImZpcnN0bmFtZSI6IklhbiIsImxhc3RuYW1lIjoiSWFuIiwiZW1haWwiOiJpYW53YWx0ZXIzMDlAZ21haWwuY29tIn19.blbBB0cMR0Q7GIkfpMXxqVRjlM4RwEnXxCCDM9Wqswk';

$arr = explode(" ", $authHeader);


// echo json_encode(array(
//     "message" => "sd" .$arr[1]
// ));
// echo json_encode(array(
//     "message2" =>  $arr[1] ."wer"
// ));
$jwt = $arr[1];

if($jwt){

    try {

        $decoded = JWT::decode($jwt, $secret_key, array('HS256'));

        // Access is granted. Add code of the operation here 

        // echo json_encode(array(
        //     "message" => "Access granted:",
        //     "data" => $decoded 
        // ));


        

        $pop =json_encode(
array("data" => $decoded 
));
       
        $obj = json_decode($pop,true);

     //print_r($obj["data"]["data"]["id"]);


$databaseService = new DatabaseService();
$conn = $databaseService->getConnection();        
$table_name = 'Users';


$idq = $obj["data"]["data"]["id"];
$query = "SELECT id, first_name, last_name, password,email FROM " . $table_name . " WHERE id = ? LIMIT 0,1";

$stmt = $conn->prepare( $query );
$stmt->bindParam(1, $idq);
$stmt->execute();
$num = $stmt->rowCount();

if($num > 0){

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $id = $row['id'];
    $firstname = $row['first_name'];
    $lastname = $row['last_name'];
    $password2 = $row['password'];
    $email =$row['email'];

        $secret_key = "6cIiwdJYrVT9puBXQRB";
        $issuer_claim = "marucho"; // this can be the servername
        $audience_claim = "THE_AUDIENCE";
        $issuedat_claim = time(); // issued at
        $notbefore_claim = $issuedat_claim + 10; //not before in seconds
        $expire_claim = $issuedat_claim + 60; // expire time in seconds
        $token = array(
            "iss" => $issuer_claim,
            "aud" => $audience_claim,
            "iat" => $issuedat_claim,
            // "nbf" => $notbefore_claim,
            "exp" => $expire_claim,
            "data" => array(
                "id" => $id,
                "firstname" => $firstname,
                "lastname" => $lastname,
                "email" => $email
        ));

$jwt = JWT::encode($token, $secret_key);
        echo json_encode(
            array(
                "message" => "Successful login.",
                "jwt" => $jwt,
                "email" => $email,
                "expireAt" => $expire_claim
            ));
     }

     else{
        echo "nope";
     }

    }catch (Exception $e){

    http_response_code(401);

    echo json_encode(array(
        "message" => "Access denied.",
        "error" => $e->getMessage()
    ));
}

}

// else{

//     echo json_encode(array(
//     "message" => $jwt;
// ));
// }
?>