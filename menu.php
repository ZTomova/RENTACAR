<?php
	error_reporting("E-NOTICE");
?>
<?php
	session_start();
	if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
		header("location: ../login.php");
	}
?>
<div id="top">
			
			<div id="top-navigation">
				Welcome Admin!
				<span>|</span>
				
				<a href="logout.php">Log out</a>
			</div>
		</div>
<div id="navigation">
			<ul>
			    
			    <li><a href="add_vehicles.php"><span>Vehicle Management</span></a></li>
				<li><a href="add_cars.php"><span>Car Management</span></a></li>
				<li><a href="delete_car.php"><span>Delete car</span></a></li>
				<li><a href="delete.php"><span>Delete client</span></a></li>
			</ul>
		</div>