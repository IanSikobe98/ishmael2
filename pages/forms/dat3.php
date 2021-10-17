<?php
//setting header to json
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

//database
define('DB_HOST', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'ishlaw');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = sprintf("SELECT * FROM `tasks`  WHERE  `rpt` = 'Never'   AND  `status` != 'Completed' ");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}



$query2 = sprintf("SELECT * FROM `rpttasks` WHERE    `status` != 'Completed'  ");

//execute query
$result2 = $mysqli->query($query2);

//loop through the returned data
$data2 = array();
foreach ($result2 as $row2) {
	$data2[] = $row2;
}

//free memory associated with result
$result->close();

$result2->close();

//close connection
$mysqli->close();

//now print the data
 
// $myarray =array(json_encode($data));
// print myarray;


$cars = array (
  "Peter"=> 'color'
);

$i=0;
$NewArray = array();
foreach($data as $key=>$value) {
    unset( $value['color'] );
    $NewArray[] = array_merge($value,$cars);
	// array_splice($NewArray, 3);
    // array_splice($NewArray, 'color');

    $i++;
}


// foreach($data as $value) {
	
    $NewArray2 = array_merge($data,$data2);
    $i++;

// }

// }
print json_encode($NewArray2);
//print (",");
//print json_encode($data);