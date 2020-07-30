<?php
require 'common.php';
if(!isset($_SESSION['email'])){header('location:login.php');}
?>

<?php

$item_id = $_GET['id'];
$user_id = $_SESSION['user_id'];

$insert_query = "insert into users_items(user_id,item_id,status) values('$user_id','$item_id','Added to cart')";
$insert_query_result = mysqli_query($con,$insert_query) or die(mysqli_error($con));
header('location: home.php');
?>