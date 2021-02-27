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
			<form action="#" method="post">
				<input type="text" id="search" name="search" placeholder="What are you looking for?"  autocomplete="off"/>
				<input type="submit" id="submit_search" name="submit_search"/>
			</form>
		</div>

		<div class="advanced_search">
			<div class="wrapper">
				<span class="arrow"></span>
				<form action="#" method="post">
					<div class="search_fields">
						<input type="text" class="float" id="check_in_date" name="check_in_date" placeholder="Check In Date"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="check_out_date" name="check_out_date" placeholder="Check Out Date"  autocomplete="off">
					</div>
					<div class="search_fields">
						<input type="text" class="float" id="min_price" name="min_price" placeholder="Min. Price"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="max_price" name="max_price" placeholder="Max. price"  autocomplete="off">
					</div>
					<input type="text" id="keywords" name="keywords" placeholder="Keywords"  autocomplete="off">
					<input type="submit" id="submit_search" name="submit_search"/>
				</form>
			</div>
		</div>
	</section>

	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<h3 style="text-decoration: underline">Make Payments Here</h3>
				<h5>Paybill Number: 00000</h5>
				<h6>Business Number: ID Number Registered with.</h6>
				<form method="post">
					<table>
						<tr>
							<td>reg Transaction ID:</td>
							<td><input type="text" name="reg" required></td>
						</tr>
						<tr>
							<td>National ID Number:</td>
							<td><input type="text" name="id_no" required></td>
						</tr>
						
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="pay" value="Submit Details"></td>
						</tr>
					</table>
				</form>
				<?php
						if(isset($_POST['pay'])){
							include 'includes/config.php';
							$reg = $_POST['reg'];
							$id_no = $_POST['id_no'];
							
							$qry = "UPDATE client SET reg = '$reg' WHERE id_no = '$id_no'";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "Payment Successfully Done. Wait for Admin Approval";
							} else{
								echo "Registration Failed. Try Again";
							}
						}
						
					  ?>
			</ul>
			
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