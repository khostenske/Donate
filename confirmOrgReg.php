<?php
    session_start();
?>

<!DOCTYPE hmtl>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1/EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html>
<head>
<!-- 	file name: confirmOrgReg.php -->
	<title>Donation Nation</title>
	<link href="php.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<h2>Thank you for registering your organization!</h2><br />
<h3>We will review your application and contact you shortly.</h3>

<?php

    //connect to DBMS
    $dbLocalhost = mysql_connect("localhost:8889","root","root") or
    //for USBWebServer: $dbLocalhost = mysql_connect("localhost","root","usbw") or
    die ("Cannot connect: ".mysql_error());
    
    //select DB
    mysql_select_db("donationNation", $dbLocalhost) or
    die ("Cannot find database: ".mysql_error());
    
    //receive data from HTML form
    $orgName=$_POST['orgName'];
    $description=$_POST['description'];
    $category=$_POST['category'];
    $orgAddress=$_POST['orgAddress'];
    $orgCity=$_POST['orgCity'];
    $orgState=$_POST['orgState'];
    $orgZip=$_POST['orgZip'];
    $orgFName=$_POST['orgFName'];
    $orgLName=$_POST['orgLName'];
    $orgPhone=$_POST['orgPhone'];
    $orgEmail=$_POST['orgEmail'];
    
    //insert customer data
    $sql = "INSERT INTO `organization` (`orgID`, `orgName`, `category`, `address`,
    `city`, `state`, `zip`, `contactFName`, `contactLName`, `phone`, `email`)
	    VALUES (NULL,'$orgName','$category','$orgAddress',$orgCity','$orgState','$orgZip',
	    $orgFName',$orgLName','$orgPhone',$orgEmail')";
	
    $currentOrg=mysql_query($sql,$dbLocalhost) or
    die ("Cannot insert to database: ".mysql_error());
    
    //close connection to DBMS
    mysql_close($dbLocalhost);
    
?>

</body>
</html>
