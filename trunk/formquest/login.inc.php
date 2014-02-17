<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	</head>
	
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			Username: <input type="text" name="username" /><br />
			Password: <input type="password" name="password" /><br />
			<input type="submit" value="Log In" />
		</form>
	</body>
</html>