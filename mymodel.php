<div class="modal fade" id="myModal">
			<div class="modal-dialog" style="left:0px;">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">×</button>
						<h4 class="modal-title" style="color:#000;">LOGIN</h4>
					</div>
					<div class="modal-body">
                                            <p>Don't have an account? <a href="signup.php" style="color:#0000ff;">Register</a></p>
                                            <form role="form" action="login_submit.php" method="POST">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email" name="e-mail" required="true">
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