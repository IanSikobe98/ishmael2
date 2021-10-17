
<?php
$handler = new \ByJG\Session\JwtSession('http://localhost/authorizes/', '34564fffct6tyuy6t3]/iui.tyg');
$handler->replaceSessionHandler(true);
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

// if($_SESSION["username"] = 'admin' ){
//     echo "done";


// }

// else{
//     header("location: login.php");
// }

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
</body>
</html>


<script type="text/javascript">
    function puta() {
 
window.value= '<?php echo ($_SESSION["username"]); ?>';//declaring global variable by window object  
console.log(value);

    }


    setTimeout(puta, 2000);


</script>