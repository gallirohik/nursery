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
<html>
<title>Nursery
</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="sidenav.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="sidenav.js"></script>
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1,h2,h3,h4,h5,h6 {
    font-family: "Playfair Display";
    letter-spacing: 5px;
}
</style>
<body>

<!-- Navbar (sit on top) -->


<!-- Header -->

<!-- Page content -->
     
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
<div class="w3-content">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small"><br><br>
     <img src="<?php echo $row['img1'] ?>" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
     <span style="font-size:30px;cursor:pointer" onclick="openNav()" id="add"><button type="button" class="btn btn-primary">Add to cart</button></span>
    </div>
     
    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About <?php echo $row['pname'];?></h1><br>
      <h5 class="w3-center"></h5>
      <p class="w3-large">A rose is a woody perennial flowering plant of the genus Rosa, in the family Rosaceae, or the flower it bears. There are over a hundred species and thousands of cultivars. They form a group of plants that can be erect shrubs, climbing or trailing with stems that are often armed with sharp prickles. Flowers vary in size and shape and are usually large and showy, in colours ranging from white through yellows and reds. Most species are native to Asia, with smaller numbers native to Europe, North America, and northwestern Africa. Species, cultivars and hybrids are all widely grown for their beauty and often are fragrant. Roses have acquired cultural significance in many societies.</p>
     
    </div>
  </div>
  
  <hr>
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Our Menu</h1><br>
      <h4>Bread Basket</h4>
      <p class="w3-text-grey">Assortment of fresh baked fruit breads and muffins 5.50</p><br>
    
      <h4>Honey Almond Granola with Fruits</h4>
      <p class="w3-text-grey">Natural cereal of honey toasted oats, raisins, almonds and dates 7.00</p><br>
    
      <h4>Belgian Waffle</h4>
      <p class="w3-text-grey">Vanilla flavored batter with malted flour 7.50</p><br>
    
      <h4>Scrambled eggs</h4>
      <p class="w3-text-grey">Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p><br>
    
      <h4>Blueberry Pancakes</h4>
      <p class="w3-text-grey">With syrup, butter and lots of berries 8.50</p>    
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="<?php echo $row['img1'] ?>" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
  </div>

  

</body>
</html>
