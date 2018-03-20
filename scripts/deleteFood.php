<?php


$server = "localhost";
$username = "root";
$password = "";
$database = "cms";

$foodName = $_POST['foodName'];

$db = mysqli_connect($server,$username,$password,$database);
if(!$db){
	die("Connection Error :" . mysqli_connect_error());
}

$sql = "DELETE FROM food where FOOD_NAME='$foodName' ";

if($db->query($sql) == true){
	echo "Deleted successfully.";
}
else{
	echo "error ".$db->error;
}
$db->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Food Court-Delete Item</title>
</head>
<body>
	<a href="../admin_dash.php" class="btn btn-primary">Home</a>
</body>
</html>