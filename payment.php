<?php
include "connect.php";
session_start();
foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
              #echo $keys.=" ".$values['item_name']." ".$values['item_id']." ".$values['item_price']." ".$values['item_quantity']; 
                  $pid=$values['item_id'];
                  $qty=$values['item_quantity'];
                  $sql = "SELECT sid,qty FROM products where pid<=>$pid";
                        $result = $conn->query($sql);

                                if ($result->num_rows > 0)
                                 {
                                  // output data of each row
                                      while($row = $result->fetch_assoc())
                                      {
                                        $sid=$row["sid"];
                                        $pqty=$row['qty']-$qty;
                                        $cid=$_SESSION['user'];
                                      
                                       $sql1 = "INSERT INTO orders1(cid,sid,pid,qty)VALUES ('$cid','$sid','$pid','$qty')";

                                        if ($conn->query($sql1) === TRUE) {
                                          
                                             $sql2="UPDATE products set qty='$pqty' where pid='$pid'";
                                             if ($conn->query($sql2) === TRUE)
                                             {
                                              
                                              $status=1;

                                             }
                                             else
                                             {
                                              echo "something went wrong :(";
                                             }
                                                 
                                          } else {
                                                  echo "Error: " . $sql1 . "<br>" . $conn->error;
                                                 }
                                               }
                                 }
           }
                                           if ($status)
                                             {
                                              
                                               ?> <div class="container"><p style="color:green;font-weight: bold;font-size:20px;">Your order is placed successfully :)</p><p  style="font-weight: bold;font-size:20px;" ><a href="index.php" >click here</a> to goto home page</p></div>
                                               <?php
                                               unset($_SESSION["shopping_cart"]);

                                             }

       ?>