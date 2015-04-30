<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Donation Nation</title>
	<link href="categories.css" rel="stylesheet" type="text/css"/>
	
</head>
<body>
	
<?php
	include('header2.php');
?>
<form action="cart.php" method="POST">
<div class="green">
	<div align='left' class='title-wrap'><div class='row'>
		<div class='columns large-12'>
		<h2 class="yellow">Community Development</h2>
		</div></div></div>
	<table class="blue" border='1'>
	<col width="500">
	<tr>
	<td>
	<div class='row content'> 
		<div class='columns large-3 project'>
			<div class='head'>
			<img src="HandsonMiami.jpeg" height="90" width="175">
			</div>
			<div class='body'>
					<h2>Florida</h2>
					<p>HandsOn Miami partners with non-profit organizations throughout Miami-Dade County to offer volunteers hundreds of worthwhile and gratifying service opportunities each month. HandsOn Miami offers a Flexible Volunteering Model.
					There is no long-term commitment, no background checks or detailed training, and we encourage volunteers to try and experience a variety of different projects. All projects are offered on our online calendar, to help you find something during a day and time that works
					for you, and are led by HandsOn Miami Project Leaders.</p>
			<h2>Project Funding</h2>
				<h3>Hands on Miami allows the opportunity to partner with them. All their funding comes from outside help funds.</h3>
			<input type="submit" value="Donate">
			</div></div></div>
	</td>
<td>	
			
	<div class='row content'> 
		<div class='columns large-3 project'>
			<div class='head'>
			<img src="AfterSchool.jpeg" height="110" width="175">
			</div>
			<div class='body'>
					<h2>United States</h2>
					<p>Founded in 1992, ASAS is celebrating two decades of empowering youth across the nation. The mission established at our founding, to give children the tools they need to have successful futures, has remained constant. How we fulfill that mission has evolved. We started in Los Angeles with 40,000 youth competing in summer time athletic and academic competitions, and now we provide comprehensive out-of-school time programs to 87,377 participants at 367 schools.</p>
			<h2>Project Funding</h2>
				<h3>ASAS has various philanthropic partners that support the organization in order to help many youths across the United States. </h3>
			<input type="submit" value="Donate">
			</div></div></div>
	</td>
<td>
	<div class='row content'> 
		<div class='columns large-3 project'>
			<div class='head'>
			<img src="vietnamChildrens.jpeg" height="90" width="150">
			</div>
			<div class='body'>
					<h2>Vietnam</h2>
					<p>In cooperation with Vietnamese officials and with the support of corporations and individuals around the world, the Vietnam Children's Fund has been building schools since 1994. Working closely with each community, calling upon local artisans and using readily available materials, VCF constructs schools that are sturdy, safe, and clean. Because a school may be the only well-built structure in a community, it serves as not only a gathering place for residents but is often the only safe haven from the elements during a natural disaster.</p>
			<h2>Project Funding</h2>
				<h3>VCF accepts no government funds. Our funding is all private and comes from individuals, foundations and corporations.</h3>
			<input type="submit" value="Donate">
			</div></div></div>
	</td>
<td>
	<div class='row content'> 
		<div class='columns large-3 project'>
			<div class='head'>
			<img src="ThriveAfrica.jpeg" height="100" width="175">
			</div>
			<div class='body'>
					<h2>West Africa</h2>
					<p>Thrive Africa provides opportunities to volunteer in Ghana on sustainable development projects and gain experience in the development sector. Our projects are developed with local stakeholders and implemented by our team, volunteers and stakeholders.</p>
			</br></br></br></br></br><h2>Project Funding</h2>
				<h3>Money used for all projects are fundraised and donated by the volunteers that work directly witht the community or by outside people.</h3>
			<input type="submit" value="Donate">
			</div></div></div>
		</td>
		</tr>
	
	</table></form>
</div>
</body>
</html>
