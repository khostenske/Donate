<?php
	session_start();
	include('database.php');
?>
<!DOCTYPE hmtl>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1/EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
<!--
	file name: tunaCafe.php
-->
	<title>Tuna Cafe</title>
	<link href="tunaCafe.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h3>Welcome to Tuna Cafe</h3>
<form action="product.php" method="POST">
<table border="0">
	<tr>
		<td class="left">
		<span class="fmlabel">Customer ID (C001, C002, C003, C004, or C005), please</span><br />
		<label for="customerid">Customer ID: </label>
		<input name="customerid" id="customerid" /></td>
		<tr><td>
			<input type="submit" value="Submit" name='submit'>
			</td>
		</tr>
</table>
</form>
</body></html>
