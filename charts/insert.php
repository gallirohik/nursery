<?php
//setting header to json
//database
define('DB_HOST', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'mydb');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli)
{
	die("Connection failed: " . $mysqli->error);
}
$pid=$_POST['pid'];

$score=$_POST['score'];
//query to get data from the table
$query = sprintf("INSERT INTO score(playerid,score) values('$pid','$score')");

//execute query
$result = $mysqli->query($query);
if($result>0)
{
	header('location:insertLog.html');
}
?>ssssss