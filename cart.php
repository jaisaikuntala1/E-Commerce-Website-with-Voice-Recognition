<?php
require 'common.php';
if (!isset($_SESSION['email'])) {   header('location: login.php'); }
?>

<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Cart</title>
  </head>
  <body>
   <?php
   include 'header.php';
   
   $user_id = $_SESSION['user_id'];?>
      <br><br><br>
   <?php 
   $select_query = "select item_id from users_items where user_id = '$user_id'";
   $select_query_result = mysqli_query($con, $select_query);
   $num_rows = mysqli_num_rows($select_query_result);
   if($num_rows == 0){ ?>
      <div class="container">
          <div class="jumbotron">
              <br><br>
              <?php echo "add items first!!" ?>
          </div>
      </div>
      <?php
   }
   else{
       $product_details_query = "select i.price,i.name,i.id from items i inner join users_items ui on i.id=ui.item_id where ui.user_id='$user_id'";
       $products_results = mysqli_query($con,$product_details_query);
       $sum = 0;?>
       
      <div class="container">
          <div class="col-xs-4 col-xs-offset-4">
              <table class="table table-striped table-borders table-hover table-responsive">
                  <tbody>
                      <tr><th>Item Number</th><th>Item Name</th><th>Price</th><th> </th></tr>
                      <?php while ($row = mysqli_fetch_array($products_results)) {?>
                      <tr><td><?php echo $row['id']; ?> </td><td> <?php echo $row['name']; ?></td><td><?php echo $row['price']; ?> </td><td><a href="cart-remove.php?id=<?php echo $row["id"]; ?>" class="remove_item_link">Remove</a> </td></tr>
                          <?php $sum = $sum + $row['price']; ?>
                      <?php } ?>
                          <tr><td> </td><td>Total</td><td><?php echo $sum; ?></td><td><a href="success.php" class="btn btn-primary">Confirm Order</a></td></tr>
                      
                  </tbody>
              </table>
              
          </div>
      </div>
          

   <?php } ?>
  
     
      
      
       
     
      
      
      
      
      <nav class="navbar navbar-inverse navbar-fixed-bottom">
         <?php
            require 'footer.php';
         ?>
        </nav>
  </body>
</html>