<?php
    session_start();
?>

<!DOCTYPE hmtl>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1/EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html>
<head>
<!-- 	file name: login.php -->
	<title>Donation Nation</title>
	<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<?php
	include('header2.php');
?>
<body>
<div>
<h2>Login</h2>
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
