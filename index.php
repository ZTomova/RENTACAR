
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

	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE status = 'Available'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'BGN.'.$rws['rent_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Car Brand>'.$rws['car_type'];?></a>
						</h1>
						<h2>Car Name/Model: <span class="property_size"><?php echo $rws['car_name'];?></span></h2>
					</div>
				</li>
			<?php
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
