<?php

require 'common.php';
if(!isset($_SESSION['email'])) {header('location:index.php');}

?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Settings</title>
    </head>
    <body>
        
    <?php        require 'header.php'; ?>
        
        
        <br><br><br><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <h1><strong>Change Password</strong></h1>
                    <form action="settings_script.php" method="POST">
                       
                        
                        <div class="form-group">
                            <input type="text" class="form-control" name="old-password" placeholder="Old Password">
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-control" name="new-password" placeholder="New Password">
                        </div>
                        
                         <div class="form-group">
                            <input type="text" class="form-control" name="retype-new-password" placeholder="Re-type New Password">
                        </div>
                        
                     
                        <button type="submit" class="btn btn-primary">Change</button>
                      
                        
                        
                    </form>
                </div>
            </div>
        </div>
        
        
        <nav class="navbar navbar-inverse navbar-fixed-bottom">
        <?php
        require 'footer.php';
        ?>
        </nav>
            
        
        
</body>
</html>