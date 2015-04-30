<!DOCTYPE hmtl>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1/EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html>
<head>
<!-- 	file name: custRegistration.php -->
	<title>Donation Nation</title>
	<link href="php.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<h2>Register</h2>
<form action="confirmCustReg.php" method="POST">
<table border="0">
    <tr>
	<td class="left">Email:</td><td><input type="text" size="25" name="email" id="email"/></td>
        <td class="left">Password:</td><td><input type="password" size="25" name="password" id="password"/></td>
    </tr>
    <tr>
	<td class="left">First Name:</td><td><input type="text" size="25" name="fName" id="fName"/></td>
        <td class="left">Last Name:</td><td><input type="text" size="25" name="lName" id="lName"/></td>
    </tr>
    <tr>
	<td class="left">Address:</td><td><input type="text" size="25" name="address" id="address"/></td><br />
        <td class="left">City:</td><td><input type="text" size="25" name="city" id="city"/></td>
        <td class="left">State:</td><td><input type="text" size="2" name="state" id="state"/></td>
        <td class="left">Zip Code:</td><td><input type="text" size="5" name="zip" id="zip"/></td>
    </tr>
     	<td class="left">Phone Number:</td><td><input type="text" size="25" name="phoneNum" id="phoneNum"/></td>
    </tr>
    <tr>
	<td class="left">Card Number:</td><td><input type="text" size="25" name="cardNum" id="cardNum"/></td><br />
        <td class="left">CVV Number:</td><td><input type="text" size="3" name="cvvNum" id="cvvNum"/></td><br />
        <td class="left">Exp. Date:</td><td><input type="text" size="10" name="expDate" id="expDate"/></td>
    </tr>
	<td><input type="submit" value="Register" name='submit'></td>
        <td><input type="reset" value="Clear" name='reset'></td>
    </tr>
</table>
</form>

</body>
</html>
