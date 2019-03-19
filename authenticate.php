<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";
$uName=$_POST['uname'];
$pwd=$_POST['pwd'];
session_start();
$_SESSION['loggedIn']=false;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
} 
$sql="SELECT * FROM customers";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["cid"]. " - Name: " . $row["fname"]. " " . $row["lname"]. "<br>";
         $_SESSION['loggedIn']=true;
        $_SESSION['user']=$row["cid"];
        echo $_SESSION['user']=$row["cid"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>