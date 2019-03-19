<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Garden store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    html,body{
      height:100%;
      width:100%;
    }
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    
	}
	.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px 0px 5px;
    cursor: pointer;
	margin-left:60%;
}
.button1 {padding: 10px 24px;}
.panel1{
     height:auto;
	 width:auto;
      }
      .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
     
    }
     #myCarosel{
      height:200px;
     }
    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
     
  </style>
</head>
<body>
<nav class="navbar navbar-inverse"> 
  <div class="container-fluid">
      
      <img class="navbar-brand" src="images/logo.jpg"></img>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Contact</a></li>
        <?php
        session_start();
        if(isset($_SESSION['loggedIn'])&&$_SESSION['loggedIn']==true)
          { 
            ?>
		 
     <li><a href="logout.php">logout</a></li>
    <?php
          }
          else
        {
       ?>
      <li><a href="login.php">login</a></li>
        <li><a href="signup.php">signup</a></li>
      </ul>
      <?php 
      } ?>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span>
          <!-- -->
            <?php
    if(isset($_SESSION['loggedIn'])&&$_SESSION['loggedIn']==true)
     {
        echo $_SESSION['user'];
  
     }
    else{
              echo "your account";
        }
       ?>
          <!-- -->
        </a></li>
        <li><a href="cart.php?showcart=1"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>
<div>
  </div>
<div class="container col-sm-12"> 
                      <?php  
                $connect = mysqli_connect("localhost", "root", "", "store");  
                $query = "SELECT * FROM products ORDER BY pid ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {    $c=0;
                  $row=1;
                  while($row)
                  {
                    ?>
                    <div class="row"><?php
                     while($row = mysqli_fetch_array($result))  
                     {  
                      
                      $c++;
                      ?>                                      
                    <div class="col-sm-4">
        
                     <form method="post" action="desc.php?id=<?php echo $row["pid"]; ?>">  
                               <div class="panel-name"><p style="font-size:15px;font-weight:bold;"><?php echo $row["pname"]; ?></p></div>
                              <div class="panel-body"> <img src="<?php echo $row["img1"]; ?>" class="img-responsive" style="width:100%" alt="Image" /></div>  
                               <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />                            
                     </form>  
                
                       </div>
          
                  
    
                <?php  
                   if($c%3==0){break;}  
                } 
                ?></div><?php
                }
              }
                else{

                } 
                ?>  
              </div>
    
	</div>
</body>
</html>