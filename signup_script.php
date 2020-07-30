<?php
require 'common.php';
?>
<?php

$name = mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$contact = mysqli_real_escape_string($con,$_POST['contact']);
$city = mysqli_real_escape_string($con,$_POST['city']);
$address = mysqli_real_escape_string($con,$_POST['address']);

$select_query = "select id from users where email='$email'";
$select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($select_query_result);

if($total_rows_fetched > 0){
    echo "Email id already exists";
}
else{
    $user_registration_query = "insert into users(name,email,password,contact,city,address) values('$name','$email','$password','$contact','$city','$address')";
    $user_registration_submit = mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = mysqli_insert_id($con);
    header('location: home.php');
    
}

?>