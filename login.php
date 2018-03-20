<!DOCTYPE html>
<html>
<head>
	<title>Food Court-Login</title>
	<link href="./css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="./css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<header>
		<div class="project-name">
			<h2>Food Court</h2>
		</div>
		<div class="nav-bar">
			<div class="header clearfix">
		        <nav>
		          <ul class="nav nav-pills pull-right">
		            <li role="presentation"><a href="index.php">Home</a></li>
		            <li role="presentation"><a href="register.php">Sign Up</a></li>
		          </ul>
		        </nav>
	      	</div>
      	</div>
	</header>
	<div class="container">
		<div id="head"><h3>LOGIN</h3><hr></div>
		<div class="form-group">
			<form method="post" action="./scripts/validate.php">
				<input class="form-control" type="text" name="username" placeholder="Username" /><br>
				<input class="form-control" type="password" name="password" placeholder="Password" /><br>
				<button class="btn btn-primary btn-login" name="login">LOGIN</button>
			</form>
		</div>
	</div>
	<footer></footer>
</body>
</html>