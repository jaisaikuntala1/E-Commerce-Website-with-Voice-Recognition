<?php
require 'common.php';
if (!isset($_SESSION['email'])) {   header('location: index.php'); }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Success</title>
        <!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to external CSS -->
                <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
            require 'header.php';

            // check all items to confirmed
            $user_id = $_SESSION['user_id'];
            $query = "SELECT item_id FROM users_items WHERE user_id = '$user_id'";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            
            while($row = mysqli_fetch_array($result)){
                $item_id = $row["item_id"];
                $query1 = "UPDATE users_items SET status = 'Confirmed' WHERE item_id = '$item_id'";
                
                $result1 = mysqli_query($con, $query1) or die(mysqli_error($con));
            }
        ?>
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <p style="text-align: center;">Thankyou for ordering from E-store. The order shall be delivered to you shortly.</p>
                    <hr>
                    <p style="text-align: center;">Order some more electronic items <a href="home.php">here.</a></p>
                </div>
            </div>
        </div>
        <nav class="navbar-fixed-bottom">
            <?php
            require 'footer.php';
        ?>
        </nav>
    </body>
</html>
