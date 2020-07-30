<?php
require 'common.php';
?>
<?php
$user_id = $_SESSION['user_id'];
$product_id = $_GET['id'];
$delete_query = "delete from users_items where user_id='$user_id' and item_id = '$product_id'";
$delete_query_result = mysqli_query($con, $delete_query) or die(mysqli_error($con));
header('location: cart.php');
?>
 