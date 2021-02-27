<!DOCTYPE html >
<html lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	
</head>
<body>

<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
		
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Vehicle Management
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					
					<div class="box-head">
						<h2 class="left">Our Vehicles</h2>
						<div class="right">
							<label>search vehicles</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="search" />
						</div>
					</div>
					
					<div class="table">
						<table width="100%" border="0" >
							<tr>
								<th width="13"><input type="checkbox" class="checkbox" /></th>
								<th>Vehicle Make</th>
								<th>Car Type</th>
								<th>rent Price</th>
								<th width="110" class="ac">Content Control</th>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM cars WHERE status = 'Available'";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td><h3><a href="#"><?php echo $row['car_type'] ?></a></h3></td>
								<td><?php echo $row['car_name'] ?></td>
								<td><a href="#"><?php echo $row['rent_cost'] ?></a></td>
								
							</tr>
							<?php
								}
							?>
						</table>
						
						
						<div class="pagging">
							<div class="left">Showing 1-12 of 44</div>
							<div class="right">
								<a href="#">Previous</a>
								<a href="#">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<a href="#">245</a>
								<span>...</span>
								<a href="#">Next</a>
								<a href="#">View all</a>
							</div>
						</div>
						
						
					</div>
					<h2><input type="submit" onclick="window.print()" value="Print Here" /></h2>
					
				</div>
				

			</div>
			
			
			
			<div id="sidebar">
				
				
				<div class="box">
					
					
					<div class="box-head">
						<h2>Management</h2>
					</div>
					
					
					<div class="box-content">
						<a href="add_cars.php" class="add-button"><span>Add new Vehicles</span></a>
						<div class="cl">&nbsp;</div>
						
						<p class="select-all"><input type="checkbox" class="checkbox" /><label>select all</label></p>
						<p><a href="#">Delete Selected</a></p>
						
						
						<div class="sort">
							<label>Sort by</label>
							<select class="field">
								<option value="">Car Type</option>
							</select>
							<select class="field">
								<option value="">Car Name</option>
							</select>
							<select class="field">
								<option value="">rent Price</option>
							</select>
						</div>
						
						
					</div>
				</div>
				
			</div>
			
			
			<div class="cl">&nbsp;</div>			
		</div>
		
	</div>
</div>

	
</body>
</html>