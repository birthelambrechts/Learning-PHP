<?php include_once 'auth.php' ?>
<!DOCTYPE html>
<html>
<head>
  <title>Log in</title>
  <link rel="stylesheet" type="text/css" href="./scss/style.login.scss">
</head>
<body>
 
	 
  <form method="post">
  <div class="header">
  	<h2>Login</h2>
  </div>
  	<?php include 'errors.php'; ?>
  	<div class="input-group">
  		<label>Email</label>
  		<input type="text" name="email_login" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="pwd_login">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>