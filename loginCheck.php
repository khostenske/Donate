<?php
/*
	file name: loginCheck.php
*/
	session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if ($email && $password)
{
    
    $dbLocalhost = mysql_connect("localhost:8889","root","root") or
    die ("Cannot connect: ".mysql_error());
    
//$dbLocalhost = mysql_connect("localhost","root","usbw") or
//mysql_select_db("donationNation", $dbLocalhost) or
//die ("Cannot find database: ".mysql_error());

    mysql_select_db("donationNation", $dbLocalhost) or
    die ("Cannot find database: ".mysql_error());
    
    $sql = "SELECT * FROM customer WHERE email='$email'";
    $custRecord = mysql_query($sql,$dbLocalhost) or
	die ("Cannot access database:".mysql_error());
	
    $results = mysql_num_rows($custRecord);
    
    if ($results != 0)
    {
	while ($record = mysql_fetch_assoc($custRecord))
	{
	    $dbemail = $record['email'];
	    $dbpassword = $record['password'];
	}
	
	if ($email == $dbemail && $password == $dbpassword)
	{
	    header("location: confirmDonation.php");
	}
	else
	{
	    header("location: retryLogin.php");
	}
    }
}

?>
