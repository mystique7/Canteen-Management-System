<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Food Court-Dashboard</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
</head>
<style type="text/css">
	#foodDetails{
		position: absolute;
		top: 120px;
		width: 70%;
		margin: 30px;
		margin-left: 50px;
		float: right;
		left: 250px;
	}
	h2{
		text-indent: 1cm;
		color: grey;
	}
</style>
<body>
	<div class="right">
		<div class="form-group">
				<button name="logout" class="btn btn-danger">Logout</button>
		</div>
	</div>
	<div id="navbar">
		<ul class="navAdmin">
			<li><a class="active" href="admin_dash.php">Home</a></li>
			<li><a  href="foodEdit.php">Add Food / Remove Food</a></li>
			<li><a  href="#">List Users</a></li>
		</ul>
	</div>
	<div id="foodDetails">
		<h2>Avaliable Foods</h2><hr>
		<table class="table table-bordered">
			<tr>
				<th>Food Type</th>
				<th>Food Name</th>
				<th>Availability</th>
				<th>Price (Per unit)</th>
			</tr>
			<?php
				$server = "localhost";
				$username = "root";
				$password = "";
				$database = "cms";
				$db = mysqli_connect($server,$username,$password,$database);
				if(!$db){
					die("Connection Error :" . mysqli_connect_error());
				}
				$sql = "Select * FROM food";
				$res = $db->query($sql);
				while($row = $res->fetch_assoc()){
			?>
			<tr>
				<td>
					<?php
						echo $row['FOOD_TYPE'];
					?>
				</td>
				<td>
					<?php
						echo $row['FOOD_NAME'];
					?>
				</td>
				<td>
					<?php
						echo $row['AVAILABILITY'];
					?>
				</td>
				<td>
					<?php
						echo $row['PRICE'];
					?>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</div>
</body>
</html>