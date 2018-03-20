<!DOCTYPE html>
<html>
<head>
	<title>Food Court-Edit Food</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
</head>
<style type="text/css">
	.form-control{
		width: 500px;
	}
	.form-group{
		margin: 15px;
	}
	#addFood{
		position: absolute;
		top: 150px;
		width: 550px;
		height: 250px;
		margin: 10px;
	}
	.btn1{
		position: absolute;
		left: 35%;
		width: 100px;
	}
	.btn2{
		position: absolute;
		float: right;
		left: 1200px;
		width: 100px;
		top: 40px;
	}
	h2{
		text-indent: 2cm;
		color: grey;
	}
	footer{
		position: absolute;
	    width: 100%;
	    height: 150px;
	    top: 110%;
	    background-color: #333;
	}
	#deleteFood{
		position: absolute;
		top: 500px;
		margin: 30px;
	}
</style>
<body>
	<header>
		<a href="admin_dash.php" class="btn btn-primary btn2">Home</a>
	</header>
	<div id="addFood">
		<h2>Add Food</h2>
		<form method="post" action="scripts/addFood.php">
			<div class="form-group"><input class="form-control" type="text" name="foodType" placeholder="Food Type" required></div>
			<div class="form-group"><input class="form-control" type="text" name="foodName" placeholder="Food Name" required></div>
			<div class="form-group"><input class="form-control" type="text" name="quantity" placeholder="Available Quantity" required></div>
			<div class="form-group"><input class="form-control" type="text" name="price" placeholder="Food Rate" required></div>
			<div class="form-group"><button class="btn btn-primary btn1">Add Food</button></div>
		</form>
	</div>
	<hr>
	<div id="deleteFood">
		<h2>Delete Food Details</h2>
		<form method="post" action="scripts/deleteFood.php">
			<div class="form-group">
				<input class="form-control" type="text" name="foodName" placeholder="Name of Food to be Deleted"><br>
				<button class="btn btn-warning">Delete</button>
			</div>
		</form>
	</div>
	<footer></footer>
</body>
</html>