<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

<section class="header">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Explore and rent your dream car</h2>
				<h3 class="properties" style="text-align: center">We have abundance of cars that are waiting for you!</h3>
			</section>
	</section>



	<section class="search">
		<div class="wrapper">
		<div id="fom">
			<form method="post">
			<h3 style="text-align:center; color: #000099; font-weight:bold; text-decoration:underline">Admin Login Area</h3>
				<table height="100" align="center">
					<tr>
						<td>Email Address:</td>
						<td><input type="text" name="uname" placeholder="Enter Username" required></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass" placeholder="Enter Password" required></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align:center"><input type="submit" name="login" value="Login Here"></td>
					</tr>
				</table>
			</form>
			<?php
				if(isset($_POST['login'])){
					include 'includes/config.php';
					
					$uname = $_POST['uname'];
					$pass = $_POST['pass'];
					
					$query = "SELECT * FROM admin WHERE uname = '$uname' AND pass = '$pass'";
					$rs = $conn->query($query);
					$num = $rs->num_rows;
					$rows = $rs->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['uname'] = $rows['uname'];
						$_SESSION['pass'] = $rows['pass'];
						echo "Login Successful";
					} else{
						echo "Login Failed. Try Again.";
					}
				}
			?>
			</div>
			
		</div>

	</section>

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>About us</li>
						<li><a href="#">About Us</a></li>
						<><a href="#">Contacts</a></>
					</ul>
				</li>


			<?php include_once "includes/footer.php"; ?>