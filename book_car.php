<!DOCTYPE html>
<html lang="en">
<head>
	<title>DREAM CARS</title>
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
						$sel = "SELECT * FROM cars WHERE car_id = '$_GET[id]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'BGN.'.$rws['rent_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Car type>'.$rws['car_type'];?></a>
						</h1>
						<h2>Car Name/Model: <span class="property_size"><?php echo $rws['car_name'];?></span></h2>
					</div>
				</li>
				<h3>Proceed to rent <?php echo $rws['car_name'];?>. </h3>
				<?php
					if(!$_SESSION['email'] && (!$_SESSION['pass'])){
				?>
				<form method="post">
					<table>
						<tr>
							<td>Full Name:</td>
							<td><input type="text" name="fname" required></td>
						</tr>
						<tr>
							<td>Phone Number:</td>
							<td><input type="text" name="phone" required></td>
						</tr>
						<tr>
							<td>Email Address:</td>
							<td><input type="email" name="email" required></td>
						</tr>
						<tr>
							<td>ID Number:</td>
							<td><input type="text" name="id_no" required></td>
						</tr>
						<tr>
							<td>Gender:</td>
							<td>
								<select name="gender">
									<option> Select Gender </option>
									<option> Male </option>
									<option> Female </option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Location:</td>
							<td><input type="text" name="location" required></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="save" value="Submit Details"></td>
						</tr>
					</table>
				</form>
				<?php
					} else
						{
							?>
								<a href="pay.php">Click to procede with payment</a>
							<?php
						}
				?>
				<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$fname = $_POST['fname'];
							$id_no = $_POST['id_no'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$location = $_POST['location'];
							
							$qry = "INSERT INTO client (fname,id_no,gender,email,phone,location,car_id,status)
							VALUES('$fname','$id_no','$gender','$email','$phone','$location','$_GET[id]','Pending')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "Successfully Registered. Proceed to pay";
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