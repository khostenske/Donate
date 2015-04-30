<?php
if (isset ($_SESSION['loggedin'])) 
	{$loggedin = $_SESSION['loggedin'];}
	else { $loggedin = FALSE; }
?>

<header>
		<hr>
		<table class="red">
		<tr>
			<td>
				<a href="homePage.php"><img src="logo.png.png" alt="logo" /></a>
			</td>
		</tr>
		</table>
		<table class="red">
		<tr>
			<td>
			 	<a href="custRegistration.php" >Sign Up</a>
				<!-- sign up and sign in pages are called???
				-->	
			</td>
			
			<td>
			<?php
				if ($loggedin == FALSE) {
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
