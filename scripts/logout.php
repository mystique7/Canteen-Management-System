<?php
	session_start();
	if(!empty($_POST['logout'])){
		session_destroy();
		header("Location: ../login.php");
	}
	else{
		echo "Must login to continue.";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="../login.php">Login</a>
</body>
</html>