 <?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "store");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="sidenav.css">
	<script src="sidenav.js"></script>
	<style type="text/css">
		.cart{
			color:#37BCDF;
		}
	</style>
</head>
<body>
<span style="font-size:30px;cursor:pointer" onclick="openNav()" id="add"><button type="button" class="btn btn-primary">Add to cart</button></span>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
   <form>
   	<label class="cart">select quantity</label>
   	<input type="number" name="qty" min="1">
        <input type="submit" name="cart" value="add">
   </form>

  
</div>
</body>
</html>