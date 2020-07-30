<div class="modal fade" id="myModal">
			<div class="modal-dialog" style="left:0px;">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">×</button>
						<h4 class="modal-title" style="color:#000;">LOGIN</h4>
					</div>
					<div class="modal-body">
                                            <p>Don't have an account? <a href="signup.php" style="color:#0000ff;">Register</a></p>
                                                <form action="login_submit.php" method="POST">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email" name="email" required="true">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" name="password" required="true">
							</div>
						    <button type="submit" name="submit" class="btn btn-primary">Login</button>
						</form><br>
                                                <a href="forgot_password.php" style="color:#0000ff">Forgot Password?</a>
					</div>
				</div>
			</div>
		</div>

<div class="navbar navbar-default navbar-fixed-top">  
    <div class="container">        
        <div class="navbar-header">   
            <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">  
                <span class="icon-bar"></span>       
                <span class="icon-bar"></span>      
                <span class="icon-bar"></span>   
            </button>      
            <a class="navbar-brand" href="index.php">E- Store</a>      
        </div>        
        <div class="collapse navbar-collapse" id="myNavbar">     
            <ul class="nav navbar-nav navbar-right">              
   <?php             
   if (isset($_SESSION['email'])) {               
       ?>        
             <li><a href="VoiceRecog.php"><span><img style="width: auto; height: 23px" src="https://www.dolbypanels.com/admin/assets/bower_components/Ionicons/src/android-microphone.svg"/></span>Voice Based Navigation</a></li>
             <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>  
             <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>    
             <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li> 
             
             
                              
    <?php 
    } else {  
        $abc = "aboutus";
        ?>  
             <li><a href="VoiceRecog.php"><span><img style="width: auto; height: 23px" src="https://www.dolbypanels.com/admin/assets/bower_components/Ionicons/src/android-microphone.svg"/></span>Voice Based Navigation</a></li>
             
             <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>   
             <li><a data-toggle="modal" href="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>  
             <li><a href="aboutus.php"><span class="glyphicon glyphicon-th-list"></span> About Us</a></li>
             <li><a href="contactus.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li> 
             
                    <?php                   
                    }                 
                    ?>            
            </ul>        
        </div>    
    </div> 
</div> 
 


 