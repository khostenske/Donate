<?php
    session_start();
?>

<!DOCTYPE hmtl>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1/EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html>
<head>
<!-- 	file name: confirmDonation.php -->
	<title>Donation Nation</title>
	<link href="php.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<h2>Thank you for donating!</h2>

<?php
    
     //connect to DBMS
    $dbLocalhost = mysql_connect("localhost:8889","root","root") or
//$dbLocalhost = mysql_connect("localhost","root","usbw") or
    die ("Cannot connect: ".mysql_error());
    
    //select DB
    mysql_select_db("donationNation", $dbLocalhost) or
    die ("Cannot find database: ".mysql_error());
    
    //receive data from HTML form
    $donated=$_POST['donated'];
    
    $orgID=$_POST['orgID'];
    $date=$_POST['date'];
    $amount=$_POST['amount'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $cardNum=$_POST['cardNum'];
    $cvvNum=$_POST['cvvNum'];
    $expDate=$_POST['expDate'];
    
    //Save the data in SESSION array
    $custID=$_SESSION['custID'];
    
    //insert customer data
    $sql = "INSERT INTO `donation` (`donationID`, `orgID`, `custID`, `date`)
    VALUES ('','$orgID','$custID','$date')";
    
    $currentCustomer=mysql_query($sql,$dbLocalhost) or
    die ("Cannot insert to database: ".mysql_error());
    
    //close connection to DBMS
    mysql_close($dbLocalhost);
    
?>
