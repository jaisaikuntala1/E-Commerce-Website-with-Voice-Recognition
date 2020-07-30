<?php
require 'common.php';
if(!isset($_SESSION['email'])){header('location: index.php');}
?>

<?php

$old_password = mysqli_real_escape_string($con, $_POST['old-password']);
$new_password = mysqli_real_escape_string($con, $_POST['new-password']);
$retype_new_password = mysqli_real_escape_string($con, $_POST['retype-new-password']);

if (strlen(mysqli_real_escape_string($con, $_POST['new-password'])) < 6) {
  echo "Password should have at-least 6 characters"."<br>";
 
}

if(strcmp($new_password, $retype_new_password)!=0)
{
    echo "Passwords doesnt match.";
 
}
else{
    $user_id = $_SESSION['user_id'];

$select_query = "select password from users where id = '$user_id'";
$result = mysqli_query($con,$select_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
$required_old_password = $row['password'];
 
 if($old_password == $required_old_password){
     $update_query = "update users set password='$new_password' where id='$user_id'";
     $update_query_result = mysqli_query($con, $update_query) or die((mysqli_error($con)));
     echo 'Password Change Sucessfull!!!';
     
 }
 else{
     echo 'Enter correct old password to change the password!';
 }
}
?>

