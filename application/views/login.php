<!DOCTYPE html>
<html>
<head>
	<title>Login System</title>
</head>
<body>
	<form action="<?php echo site_url('login/cek'); ?>" method="post">
		<label>Username</label>
		<input type="text" name="username">
		<label>Password</label>
		<input type="password" name="password">
		<label></label>
		<button type="submit">Log In</button>
	</form>
</body>
</html>