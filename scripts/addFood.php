<?php

$foodType = $_POST['foodType'];
$foodName = $_POST['foodName'];
$foodQty = $_POST['quantity'];
$price = $_POST['price'];

$server = "localhost";
$username = "root";
$password = "";
$database = "cms";


$db = mysqli_connect($server,$username,$password,$database);
if(!$db){
	die("Connection Error :" . mysqli_connect_error());
}
$sql = "INSERT INTO food (FOOD_TYPE,FOOD_NAME,AVAILABILITY,PRICE) VALUES ('$foodType','$foodName','$foodQty','$price') ";

if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: <br>" . $db->error;
}
$db->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Food</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
</head>
<body>
	<a href="../admin_dash.php" class="btn btn-primary">Home</a>
</body>
</html>