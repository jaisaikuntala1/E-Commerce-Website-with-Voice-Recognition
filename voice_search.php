

<?php
require 'common.php';
?>
<div class="modal fade" id="myModal" role="dialog">
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
<?php
$var = mysqli_real_escape_string($con,$_POST['q']);

if($var == "aboutus" or $var == "about us" or $var == "a b o u t u s"){
    header('location: aboutus.php');
    
}

if($var == "signup" or $var == "sign up" or $var == "register" or $var == "s i g n u p"or $var == "r e g i s t e r"){
    header('location: signup.php');
}

if($var == "cart" or $var == 'c a r t'){
    header('location: cart.php');
}

if($var == "settings" or $var == 's e t t i n g s'){
    header('location: settings.php');
}

if($var == "logout" or $var == 'log out' or $var == 'l o g o u t'){
    header('location: logout_script.php');
}

if($var == "contactus" or $var == "contact us" or $var == "c o n t a c t u s" ){
    header('location: contactus.php');
}

if($var == "login" or $var == "log in" or $var == "l o g i n" ){
    ?>
<a id="clickme" data-toggle="modal" href="#myModal"></a>
    <script>
    $("#clickme").click(function() {
location.href = this.href; // goes to link
});
// trigger click callback
$("#clickme").click();
</script>
<?php

}

?>
