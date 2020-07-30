<?php
require 'common.php';
?>

<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Products</title>
  </head>
  <body>
    <?php
    include 'header.php';
    include 'check_if_added.php';
    ?>
      <br><br><br>
      
      
      
      
      <div class="container-fluid">
            <div class="row">
                <div class="col-xs-4">
                    <div class="panel panel-default">
                        <div class="panel-heading" >Mobile 1</div>
                        <div class="panel-body">
                            
                            <center>
                                <img src="img/m1.jpg">
                            </center>
                        <div class="caption">
                            
                            <p>Google - Pixel 3a with 64GB Memory Cell Phone (Unlocked) - Just Black - G020G | Rs. 10000</p> 
                         <?php if(!isset($_SESSION['email'])){?>
                              <p><a href='login.php' role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                              <?php
                              } else {
                                  if(check_if_added_to_cart(1)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              }
                              ?>
                        </div>
                            
                            
                        </div>
                        
                        
                    </div>
                </div>
                
                <div class="col-xs-4">
                    <div class="panel panel-default">
                        <div class="panel-heading" >Mobile 2</div>
                        <div class="panel-body">
                            
                            <center>
                                <img src="img/m2.jpg">
                            </center>
                        <div class="caption">
                            <p>OPPO Find X FindX 6.42'' 128GB 8GB Smartphone Dual SIM GSM Only, No CDMA (Glacier Blue) | Rs. 12000</p> 
                         <?php if(!isset($_SESSION['email'])){?>
                              <p><a href='login.php' role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                              <?php
                              } else {
                                  if(check_if_added_to_cart(2)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              }
                              ?>
                        </div>
                            
                            
                        </div>
                        
                        
                    </div>
                </div>
                
                <div class="col-xs-4">
                    <div class="panel panel-default">
                        <div class="panel-heading" >Mobile 3</div>
                        <div class="panel-body">
                            <center>
                                
                                <img src="img/m3.jpg">
                            </center>
                        <div class="caption">
                            <p>Samsung Galaxy S10 Factory Unlocked Android Cell Phone | US Version | 128GB of Storage | Fingerprint ID and Facial Recognition | Long-Lasting... | Rs. 15000</p> 
                         <?php if(!isset($_SESSION['email'])){?>
                              <p><a href='login.php' role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                              <?php
                              } else {
                                  if(check_if_added_to_cart(3)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              }
                              ?>
                        </div>
                           
                            
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
      
      
      <div class="container-fluid">
            <div class="row">
                <div class="col-xs-4">
                    <div class="panel panel-default">
                        <div class="panel-heading" >Mobile 4</div>
                        <div class="panel-body">
                            
                            <center>
                                <img src="img/m4.jpg">
                            </center>
                        <div class="caption">
                            <p>Google Pixel 1st Gen 32GB Factory Unlocked GSM/CDMA Smartphone for AT&T + T-Mobile + Verizon Wireless + Sprint (Quite Black) | Rs. 12500</p> 
                         <?php if(!isset($_SESSION['email'])){?>
                              <p><a href='login.php' role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                              <?php
                              } else {
                                  if(check_if_added_to_cart(4)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              }
                              ?>
                        </div>
                            
                            
                        </div>
                        
                        
                    </div>
                </div>
                
                <div class="col-xs-4">
                    <div class="panel panel-default">
                        <div class="panel-heading" >Mobile 5</div>
                        <div class="panel-body">
                            
                            <center>
                                 <img src="img/m5.jpg">
                            </center>
                        <div class="caption">
                            <p>Original IQOO 3 12G+256GB 5G Mobile Phone Snapdragon 865 AMOLED 6.44" Screen Android 10 180hz 4440mAh 55W Super Charger Global ROM UFS 3.1 48.0MP... | Rs. 18000</p> 
                         <?php if(!isset($_SESSION['email'])){?>
                              <p><a href='login.php' role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                              <?php
                              } else {
                                  if(check_if_added_to_cart(5)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              }
                              ?>
                        </div>
                           
                            
                        </div>
                        
                        
                    </div>
                </div>
                
                <div class="col-xs-4">
                    <div class="panel panel-default">
                        <div class="panel-heading" >Mobile 6</div>
                        <div class="panel-body">
                            
                            <center>
                                <img src="img/m6.jpg">
                            </center>
                        <div class="caption">
                            <p>Huawei P30 Lite (128GB, 4GB RAM) 6.15" Display, AI Triple Camera, Dual SIM Global GSM Factory Unlocked MAR-LX3A - International Version, No Warranty (Peacock Blue) | Rs. 16500</p> 
                         <?php if(!isset($_SESSION['email'])){?>
                              <p><a href='login.php' role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                              <?php
                              } else {
                                  if(check_if_added_to_cart(6)){
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              }
                              ?>
                        </div>
                            
                            
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
      <br><br><br>
      
   <?php
 include 'footer.php';
 ?>
      
      
  </body>
</html>