<?php
    session_start();
?>

<!DOCTYPE hmtl>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1/EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html>
<head>
<!-- 	file name: confirmCustReg.php -->
	<title>Donation Nation</title>
	<link href="php.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<h2>Thank you for registering!</h2>

<?php

    //connect to DBMS
    //$dbLocalhost = mysql_connect("localhost:8889","root","root") or
    $dbLocalhost = mysql_connect("localhost","root","usbw") or
    die ("Cannot connect: ".mysql_error());
    
    //select DB
    mysql_select_db("donationNation", $dbLocalhost) or
    die ("Cannot find database: ".mysql_error());
    
    //receive data from HTML form
    $fName=$_POST['fName'];
    $lName=$_POST['lName'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $phone=$_POST['phoneNum'];
    $email=$_POST['email'];
    $cardNum=$_POST['cardNum'];
    $cvvNum=$_POST['cvvNum'];
    $expDate=$_POST['expDate'];
    $password=$_POST['password'];
    
    //save the data to SESSION array
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    
    //insert customer data
    $sql = "INSERT INTO `customer` (`custID`, `fName`, `lName`, `address`,
    `city`, `state`, `zip`, `phone`, `email`,`cardNum`, `cvvNum`, `expDate`, `password`)
    VALUES (NULL,'$fName','$lName','$address','$city','$state','$zip','$phone',
    '$email','$cardNum','$cvvNum','$expDate', '$password')";
    
    $currentCustomer=mysql_query($sql,$dbLocalhost) or
    die ("Cannot insert to database: ".mysql_error());
    
    //close connection to DBMS
    mysql_close($dbLocalhost);
    
?>

<a href="login.php">Click here to log in.</a>

</body>
</html>
