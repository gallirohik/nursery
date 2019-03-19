<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

input[type=text], select{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
input[type=password]{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>
</head>
<body>
<?php 
if(isset($_GET['status'])){ 
?> <p style="color:red;font-size:20px">login failed ! please login with valid details.</p><?php
}
?>

<div class="container" style="width:40%; margin-left:30%;margin-top:5%;" >
  <form action="login1.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">User name</label>
      </div>
      <div class="col-75">
        <input type="text" id="uname" name="uname" placeholder="Your username..">
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <label for="lname">Enter Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="pass" name="pwd" placeholder="Your password..">
      </div>
    </div>
    <br>
    <div class="row">
      <input type="submit" value="login">
    </div>
  </form>
</div>

</body>
</html>
