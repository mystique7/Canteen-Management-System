<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "cms";
session_start();
// $salt = "137^()%$!@16bxnsdv/*12";
// $pw = "admin";
// $hash = md5($pw.$salt.md5($pw));
// echo $hash;

$db = mysqli_connect($server,$username,$password,$database);
if(!$db){
	die("Connection Error :" . mysqli_connect_error());
}
$username = $_POST['username'];
$password = $_POST['password'];
$salt = "137^()%$!@16bxnsdv/*12";
$hash = md5($password.$salt.md5($password));

$sql = "SELECT * FROM users WHERE USERNAME= '$username' and PASSWORD='$hash' ";
$res = $db->query($sql);
while($row = $res->fetch_assoc()){
	$user = $row['USERNAME'];
	$pass = $row['PASSWORD'];
	$userType = $row["TYPE"];
	$_SESSION['is_logged_in'] = true;
}
//echo $_SESSION['login_user'];

if($hash == $pass){
	if($userType == 38 && isset($_SESSION['is_logged_in'])){
		header("Location: ../admin_dash.php");
	}
	elseif($hash != $pass) {
		echo "Mismatching Credentials.";
	}
	else {
		header("Location: ../user_dash.php");
	}
}
$db->close();
?>