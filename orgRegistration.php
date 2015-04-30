<!DOCTYPE hmtl>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1/EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html>
<head>
<!-- 	file name: orgRegistration.php -->
	<title>Donation Nation</title>
	<link href="php.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<h2>Register Organization</h2>
<form action="confirmOrgReg.php" method="POST">
<table border="0">
    <tr>
	<td class="left">Organization Name:</td><td><input type="text" size="25" name="orgName" id="orgName"/></td>
    </tr>
	<td class="left">Description:</td><td><input type="text" size="25" name="orgDescription" id="orgDescription"/></td>
<!--Make radio buttons-->
        <td class="left">Category:</td><td><input type="text" size="25" name="category" id="category"/></td>
    </tr>
    <tr>
	<td class="left">Headquarters Address:</td><td><input type="text" size="25" name="orgAddress" id="orgAddress"/></td>
        <td class="left">City:</td><td><input type="text" size="25" name="orgCity" id="orgCity"/></td>
        <td class="left">State:</td><td><input type="text" size="2" name="orgState" id="orgState"/></td>
        <td class="left">Zip Code:</td><td><input type="text" size="5" name="orgZip" id="orgZip"/></td>
    </tr>
<!--    <tr>
	<td class="left">Contact First Name:</td><td><input type="text" size="25" name="orgFName" id="orgFName"/></td>
       <td class="left">Last Name:</td><td><input type="text" size="25" name="orgLName" id="orgLName"/></td><br />
     	<td class="left">Phone Number:</td><td><input type="text" size="10" name="orgPhone" id="orgPhone"/></td><br />
	<td class="left">Email:</td><td><input type="text" size="25" name="orgEmail" id="orgEmail"/></td><br />
    </tr> -->
	<td><input type="submit" value="Register" name='submit'></td>
	<td><input type="reset" value="Clear" name='reset'></td>
    </tr>
</table>
</form>

</body>
</html>
