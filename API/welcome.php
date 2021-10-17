<?php
// Initialize the session

 
// Check if the user is logged in, if not then redirect him to login page
// !isset($_COOKIE["jwt"]) && !isset($_COOKIE["log"])
if(!isset($_COOKIE["jwt"])){
    header("location: zanlog.php");
    exit;
// echo ($_COOKIE["jwt"]);

}


?>
 


<!DOCTYPE html>
<html>
<head>
	<title>do it </title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<h1>HELLO DOIT</h1>
<a href="zanout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
<button onclick="nain()">kjhjijiji</button>
<button onclick="fetchitcal()">get it done</button>
<!-- <textarea id="myTextarea"></textarea>/ -->
<script type="text/javascript">
	function nain(){
	
console.log("<?php echo $_COOKIE["jwt"] ?>");


console.log(document.cookie.split(";"));
str =document.cookie.split(";");
str2 = str[0].split("=")
console.log(str2);
}


function busui(){
	// document.getElementById("myTextarea").value="<script> alert(document.cookie)"+"<"+ "/script>";
}


  function fetchitcal(id){
// var fired_button = $("button").val();

var fired_button = id ;

// alert(fired_button);
console.log(fired_button);
  




$.ajax
  ({
    type: "GET",
   beforeSend: function (xhr) {
    var jwt ="<?php echo $_COOKIE["ref"] ?>";
    // console.log("Authorization", "Bearer  " + jwt"");

     
    xhr.setRequestHeader ("Authorization", "Basic "+ jwt);
  }

   ,

    url: "http://localhost/jawert/php-jwt-example/api/zanref.php",
    dataType: 'json',
    async: false,




    success: function (data){
    // alert('Thanks for your comment!');
    console.log(data.jwt);
    console.log("DONE");
    var dt = new Date();
         dt.setSeconds( dt.getSeconds() + 30 );

    document.cookie = "jwt="+data.jwt+"; expires="+dt+"";
    console.log(dt);    }
});

}



</script>
</body>



</html>