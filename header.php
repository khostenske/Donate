<?php
session_start();

$loggedin = $_SESSION['loggedin'];
?>

<header>
		<hr>
		<table>
		<tr>
			<td>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			</td>
			<td>
				<a href="homePage.php"><img src="logo.png.png" alt="logo" /></a>
			</td>
			<?php
				for($a=0;$a<=15;$a++) {
					echo "<td>";
					echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
					echo "</td>";
				}
			?>
			<td>
			 	<a href="custRegistration.php" >Sign Up</a>
				<!-- sign up and sign in pages are called???
				-->	
			</td>
			
			<td>
			<?php
				if $loggedin = FALSE {
					echo "<a href='login.php'>Sign In</a>"; }
				else {
					echo "<a href='logout.php'>Log Out</a>"; }
			?>
			</td>
			
			<td>
				<a href="cart.php">Your Cart</a>
			</td>
			</tr>
			
			
		</table>
<hr>		
	</header>
