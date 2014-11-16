<form action="login.php" method="post">
	<div class="body bg-gray">
		<div class="form-group">
			<input type="text" name="username" autocomplete="off" class="form-control" placeholder="Username"/>
		</div>
		<div class="form-group">
			<input type="password" name="password" autocomplete="off" class="form-control" placeholder="Password"/>
		</div>          
		<div class="form-group">
			<input type="checkbox" name="remember_me"/> Remember me
		</div>
	</div>
	<div class="footer">                                                               
		<input name="signin" type="submit" class="btn bg-olive btn-block" value="Sign me in"/>
		
		<p><a href="forgotpassword.php">I forgot my password</a></p>
		
		<a href="register.php" class="text-center">Register a new membership</a>
	</div>
</form>