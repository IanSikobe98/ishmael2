<?php
include_once './config/database.php';
require "../vendor/autoload.php";
use \Firebase\JWT\JWT;

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET,POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


$secret_key = "-----BEGIN PUBLIC KEY-----
MIIBITANBgkqhkiG9w0BAQEFAAOCAQ4AMIIBCQKCAQBo7XX/N2WuOUtnB1zW/xoi
Juz5/Lh0NXORSx3eo0cKcMoSghxpoPDeL21+mluVDeHr37VVbl25P9ItwWfRcCKl
GBuM4WPS6k6b83zzNlRHGoJL9mooj27Cn8mc2elCBbBkbDi6t0NEXYbVrINtyU2x
F9yaUkryveNOwwUd6t1mjeF8H8xKU3SBc+E3Vm+gzpV/6ED78PdAaVBKvVxNQEMX
b01tKzMMwzfY3K1IA5jbVY5tHNCbc/EA/9UqzV4awH1o35v12Q1oCb28und0eJ33
D5KHVUmIZcLQgG6ivP1mmPoZ3O0udPzN2Qnm1mepQp/oNsY0V4VSt/hcqXHwyY5H
AgMBAAE=
-----END PUBLIC KEY-----";
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

        $decoded = JWT::decode($jwt, $secret_key, array('RS256'));

        // Access is granted. Add code of the operation here 

        // echo json_encode(array(
        //     "message" => "Access granted:",
        //     "data" => $decoded 
        // ));

     $pop = json_encode($decoded);   
     // echo $pop["Team"];
     echo $pop;

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