<?php
include "connect.php";
$cid=$_POST['uname'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pass=$_POST['pwd'];
$mob1=$_POST['mob1'];
$mob2=$_POST['mob2'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$dno=$_POST['dno'];
$area=$_POST['area'];
$city=$_POST['city'];
$state=$_POST['state'];
$pin=$_POST['pin'];
$sql = "INSERT INTO customer (cid,fname, lname,pass,mob1,mob2,email,gender)
VALUES ('$cid', '$fname', '$lname','$pass','$mob1','$mob2','$email','$gender')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql2 = "INSERT INTO address (cid,dno,area,city,state,zip)
VALUES ('$cid', '$dno', '$area','$city','$state','$pin')";

if ($conn->query($sql2) === TRUE) {
    ?> <div class="container"><p style="color:green;font-weight: bold;font-size:20px;">You are Registered successfully :)</p><p  style="font-weight: bold;font-size:20px;" ><a href="login.php" >click here</a> to go login page</p></div><?php
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}

$conn->close();

?>