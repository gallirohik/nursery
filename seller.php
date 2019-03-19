<?php
include "connect.php";
?>
<!DOCTYPE html>
<html>
<title>The Gardens</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
/* Floating column for labels: 25% width */
.col-30 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

/* Floating column for inputs: 75% width */
.col-70 {
  float: left;
  width: 70%;
  margin-top: 6px;
}
@media screen and (max-width: 600px) {
  .col-30, .col-70{
    display:none;
  }
}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Logo</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="/w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Rohik</strong></span><br>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  Orders</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-plus-circle"></i> Add product</a>
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-comments"></i> Comments</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>History</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>Profile</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-half" style="cursor: pointer;">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-line-chart w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php
               $sql1 = "SELECT count(*) as count FROM `orders1` WHERE status<=>3";
                $result1 = $conn->query($sql1);
                if ($result1->num_rows > 0)
                 {
                  $row1 = $result1->fetch_assoc();
                  echo $row1['count'];
                }
              ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Total sales</h4>
      </div>
    </div>
 
    <div class="w3-half" style="cursor: pointer;">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-database w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php
               $sql2 = "SELECT count(*) as count FROM `orders1` WHERE status<=>1";
                $result2 = $conn->query($sql2);
                if ($result2->num_rows > 0)
                 {
                  $row2 = $result2->fetch_assoc();
                  echo $row2['count'];
                }
              ?></h3> 
        </div>
        <div class="w3-clear"></div>
        <h4>Total orders</h4>
      </div>
    </div>
  </div>
  <!--
<div class="col-70">
  
    <script src="js/Chart.bundle.js"></script>
    <script src="js/utils.js"></script>
    <style>
    canvas{
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    </style>
    <div style="width:90%;height:30%;margin-left:10%;">
        <canvas id="canvas"></canvas>
    </div>

</div>-->
  
  <hr>
  <?php
               $sql = "SELECT count(*) as count FROM `orders1` WHERE 1";
                $result = $conn->query($sql);
                if ($result->num_rows > 0)
                 {
                  $row= $result->fetch_assoc();
                  $total=$row['count'];
                }
               $sql3 = "SELECT count(*) as count FROM `orders1` WHERE status<=>1";
                $result3 = $conn->query($sql3);
                if ($result3->num_rows > 0)
                 {
                  $row3 = $result3->fetch_assoc();
                  $new=$row3['count'];
                }
              ?>
  <div class="w3-container">
    <h5>Delivery Status</h5>
    <p>New Orders</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-green" style="width:<?php echo ($new/$total)*100;$new1=($new/$total)*100;?>%"><?php
               echo round($new1)."%";
              ?></div>
    </div>

    <p>About to delivered</p>
    <?php
               $sql4 = "SELECT count(*) as count FROM `orders1` WHERE status<=>2";
                $result4 = $conn->query($sql4);
                if ($result4->num_rows > 0)
                 {
                  $row4 = $result4->fetch_assoc();
                  $about=($row4['count']/$new)*100;
                }
              ?>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-orange" style="width:<?php echo $about;?>%"><?php
                echo round($about)."%";
              ?></div>
    </div>

    <p>successfully Delivered</p>
    <?php
               $sql5 = "SELECT count(*) as count FROM `orders1` WHERE status<=>3";
                $result5 = $conn->query($sql5);
                if ($result5->num_rows > 0)
                 {
                  $row5 = $result5->fetch_assoc();
                  $del=($row5['count']/$about)*100;
                }
              ?>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-red" style="width:<?php echo $del ?>%"><?php echo round($del)."%" ?></div>

    </div>

  </div>
  <hr>

  <div class="w3-container">
    <h5>Cities</h5>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
     <?php
               $sql7 = "SELECT address.city,count(address.city) as count,address.cid FROM address INNER JOIN orders1 ON Orders1.cid=address.cid GROUP BY address.city ORDER BY count DESC";
                $result7 = $conn->query($sql7);
                if ($result2->num_rows > 0)
                 {
                   while($row7 = $result7->fetch_assoc()) {
                     echo "<tr><td>" . $row7["city"]. "</td><td>". $row7["count"]."</td></tr>";

                                       }
                }
              ?>
    </table><br>
    <button class="w3-button w3-dark-grey">More Cities <i class="fa fa-arrow-right"></i></button>
  </div>
  <hr>
<!--
  <div class="w3-container">
    <h5>Recent Users</h5>
    <ul class="w3-ul w3-card-4 w3-white">
      <li class="w3-padding-16">
        <img src="/w3images/avatar2.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-xlarge">Prasad</span><br>
      </li>
      <li class="w3-padding-16">
        <img src="/w3images/avatar5.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-xlarge">Tulasi</span><br>
      </li>
      <li class="w3-padding-16">
        <img src="/w3images/avatar6.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-xlarge">Praveen</span><br>
      </li>
    </ul>
  </div>-->
  <hr>

  <div class="w3-container">
    <h5>Recent Comments</h5>
    <div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-circle" src="/w3images/avatar3.png" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>Chakravarthi <span class="w3-opacity w3-medium">Sep 29, 2014, 9:12 PM</span></h4>
        <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-circle" src="/w3images/avatar1.png" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>Srinivas <span class="w3-opacity w3-medium">Sep 28, 2014, 10:15 PM</span></h4>
        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
      </div>
    </div>
  </div>
  <br>
  

  <!-- Footer -->
  
  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>
<script>
        var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var config = {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                datasets: [{
                    label: "orders",
                    backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.red,
                    data: [
                        100,180,150,100,40,40,50
                    ],
                    fill: false,
                }, ]
            },
            options: {
                responsive: true,
                title:{
                    display:true,
                    text:'My '
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Month'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Orders'
                        }
                    }]
                }
            }
        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myLine = new Chart(ctx, config);
        };

       
        

        


       
    </script>
</body>
</html>
