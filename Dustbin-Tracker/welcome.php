
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Transparent Login Form</title>
		<link rel="stylesheet" href="style1.css">
	</head>
	<body>
	 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<div class="login-box">
		<h1>Dustbin</h1>
		<div class="radio">
			<input type="radio" name="st" value="admin">&nbsp;&nbsp;Admin
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="st" value="staff">&nbsp;&nbsp;Staff
			<input type="radio" name="st" value="staff">&nbsp;&nbsp;Staff
		</div>
		<div class="textbox <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
			<i class="fa fa-user" aria-hidden="true"></i>

			<input type="text" placeholder="Username" name="username" required>
			<span class="help-block"><?php echo $username_err; ?></span>
		</div>	
		<br>
		<div class="textbox <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
		<i class="fa fa-key" aria-hidden="true"></i>

			<input type="password" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
			<span class="help-block"><?php echo $password_err; ?></span>
			<span id="passwordInfoResponsive" class="helpText-responsive show-mobile"><p style="font-size:10px; opacity:0.5">Passwords must have upper and lower case letters, at least 1 number, and be at least 8 characters long.</p></span>
		</div>
		
		
		<input class="btn" type="submit" name="" value="Sign In">
		</div>
	
	</form>
</html>