<?php
// Initialize the session
// isset($_COOKIE["jwt"])  && isset($_COOKIE["log"])
if(isset($_COOKIE["jwt"])){
    header("location: welcome.php");
    exit;
}
include_once './config/database.php';
require "../vendor/autoload.php";
use \Firebase\JWT\JWT;

if($_SERVER["REQUEST_METHOD"] == "POST"){


$email = '';
$password = '';

$databaseService = new DatabaseService();
$conn = $databaseService->getConnection();



// $data = json_decode(file_get_contents("php://input"));

$email = $_POST["email"];
$password = $_POST["password"];

$table_name = 'Users';

$query = "SELECT id, first_name, last_name, password FROM " . $table_name . " WHERE email = ? LIMIT 0,1";

$stmt = $conn->prepare( $query );
$stmt->bindParam(1, $email);
$stmt->execute();
$num = $stmt->rowCount();

if($num > 0){
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $id = $row['id'];
    $firstname = $row['first_name'];
    $lastname = $row['last_name'];
    $password2 = $row['password'];

    if(password_verify($password, $password2))
    {
        $secret_key = "6cIiwdJYrVT9puBXQRB";
        $issuer_claim = "marucho"; // this can be the servername
        $audience_claim = "THE_AUDIENCE";
        $issuedat_claim = time(); // issued at
        $notbefore_claim = $issuedat_claim + 10; //not before in seconds
        $expire_claim = $issuedat_claim + 40; // expire time in seconds
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


        $secret_key2 = "7EqBDh5em8UOI8WXmeS";
        $issuer_claim2 = "Preyas"; // this can be the servername
        $audience_claim2 = "THE_AUDIENCE";
        $issuedat_claim2 = time(); // issued at
        $notbefore_claim2 = $issuedat_claim2 + 10; //not before in seconds
        $expire_claim2 = $issuedat_claim2 + 50; // expire time in seconds
        $token2 = array(
            "iss" => $issuer_claim2,
            "aud" => $audience_claim2,
            "iat" => $issuedat_claim2,
            "nbf" => $notbefore_claim,
            "exp" => $expire_claim2,
            "data" => array(
                "id" => $id,

        ));

        http_response_code(200);

        $jwt = JWT::encode($token, $secret_key);
        $jwt2 = JWT::encode($token2, $secret_key2);
        // echo json_encode(
        //     array(
        //         "message" => "Successful login.",
        //         "jwt" => $jwt,
        //         "email" => $email,
        //         "expireAt" => $expire_claim
        //     ));
         setcookie('jwt', $jwt,time() + (30), 'http://localhost/jawert/php-jwt-example/api/','','');
        // setcookie('jwt', "",time() -3600, 'http://localhost/jawert/php-jwt-example/api/');
         $_COOKIE['jwt'] = $jwt;

                  setcookie('ref', $jwt2,time() + (40), 'http://localhost/jawert/php-jwt-example/api/','','');

        // setcookie('jwt', "",time() -3600, 'http://localhost/jawert/php-jwt-example/api/');
         $_COOKIE['ref'] = $jwt2;
         setcookie('log', 'true',time() + (40), 'http://localhost/jawert/php-jwt-example/api/','','',true);
         $_COOKIE['log'] = 'true';
    // echo ($_COOKIE["jwt"]);
header("location: welcome.php");
    }
     else{

        http_response_code(401);
        echo json_encode(array("message" => "Login failed.", "password" => $password));
    }
}

    }


 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="email" >
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" >
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>
</body>
</html>