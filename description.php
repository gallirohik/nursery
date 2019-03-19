<?php
include "connect.php";
$uname="";
$pwd="";
if (isset($_GET['id'])) 
{
  $pid=$_GET['id'];
}
$sql = "SELECT * FROM products where pid='$pid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
     $row = $result->fetch_assoc();
       
      
    }
 else {
    echo "";
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>simply me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="sidenav.css">
  <script src="sidenav.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  html,body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
      height:100%;
      width:100%;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  .about{
   background-image: url(<?php echo $row['img1'] ?>);
   background-color: #474e5d; /* Dark Blue */
  color: #ffffff;
  background-size:100% 100%;
  height:100%;

}
.price{
  font-size:30px;
  font-color:;
  margin-right:80%;
}
.desc{
  margin-top:35%;
  color:black;
  font-size:18pt;
}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .about {
        height: 50%;
        
    }
}
  </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><?php echo $row['pname']; ?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">WHO</a></li>
        <li><a href="#">WHAT</a></li>
        <li><a href="#">WHERE</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->

<!-- Second Container -->
<div class="container-fluid bg-2 text-center about">
  <h3 class="margin"></h3>
  <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
  
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Where To Find Me?</h3><br>
  <div class="row">
    <div class="col-sm-5">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <img src="images/img4.jpeg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-5"> 
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <img src="images/img5.jpeg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-2">
      <span style="font-size:30px;cursor:pointer" onclick="openNav()" id="add"><button type="button" class="btn btn-primary">Add to cart</button></span>
     <div class="sidenav" id="mySidenav"> 
  
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
   <form method="post" action="cart.php?action=add&id=<?php echo $row["pid"]; ?>">  
    <label class="cart">select quantity</label>
    
                               <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               
    <span><input type="number" name="quantity" min="1" value="1"></span>
        <span><input type="submit" name="cart" value="add"></span>
   </form>

  </div>
</div>
</div>

<!-- Footer   <button class="btn-primary">Add to cart</button>
  <br>
  <p class="price">&#x20B9;</p>
    </div> -->


</body>
</html>
