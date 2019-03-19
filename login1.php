<?php
$uName=$_POST['uname'];
$pwd=$_POST['pwd'];

session_start();
$_SESSION['loggedIn']=false;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM customer where cid='$uName' and pass='$pwd'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["cid"]. " - Name: " . $row["fname"]. " " . $row["lname"]. "<br>";
       echo  $_SESSION['loggedIn']=true;
       echo  $_SESSION['user']=$row['cid'];
       header("location:index.php");
    }
} else {
    header("location:login.php?status=1");
}
$conn->close();

?>