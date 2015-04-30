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
	<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php
	include('header2.php');
?>
<div class="green">
<h2>Thank you for registering your organization!</h2><br />
<h3>We will review your application and contact you shortly.</h3>

<?php
    //connect to DBMS
    $dbLocalhost = mysql_connect("localhost","root","usbw") or
    die ("Cannot connect: ".mysql_error());
    
    //select DB
    mysql_select_db("donationNation", $dbLocalhost) or
    die ("Cannot find database: ".mysql_error());
    
    //receive data from HTML form
    $orgName=$_POST['orgName'];
    //$orgDescription=$_POST['orgDescription'];
    $category=$_POST['category'];
    $orgAddress=$_POST['orgAddress'];
    $orgCity=$_POST['orgCity'];
    $orgState=$_POST['orgState'];
    $orgZip=$_POST['orgZip'];
    $orgPhone=$_POST['orgPhone'];
  
    //insert organization data
    $sql = "INSERT INTO `organizations` (`orgID`, `orgName`, `category`, `orgAddress`,
    `orgCity`, `orgState`, `orgZip`, `orgPhone`)
	VALUES (NULL,'$orgName','$category','$orgAddress',$orgCity','$orgState','$orgZip',
	'$orgPhone')";
	
     $currentOrg=mysql_query($sql,$dbLocalhost) or
    die ("Cannot insert to database: ".mysql_error());
    
    //close connection to DBMS
    mysql_close($dbLocalhost);
    
?>
</div>
</body>
</html>
