<?php
    session_start();
?>

<!DOCTYPE hmtl>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1/EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html>
<head>
<!-- 	file name: retryLogin.php -->
	<title>Donation Nation</title>
	<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php
	include('header.php');
?>
	<div>
<h2>Login</h2>
<h3>The username or password was incorrect. Please try again.</h3>

<form action="loginCheck.php" method="POST">
<table class="pink" border="0">
    <tr>
	<td class="pink">Email:<input type="text" size="25" name="email" id="email"/></td>
    </tr>
    <tr>
	<td class="pink">Password:<input type="password" size="25" name="password" id="password" /></td>
    </tr>
    <tr>
	<td><input type="submit" value="Login" name='submit'></td>
    </tr>
</table>
</form>
</div>
</body>
</html>
