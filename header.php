<? php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Location Keeper</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="background">
	<header>
		<nav>
			<div id="menu-outer"><div class="table">
		<ul id="horizontal-list">
			<li><a href="index.php">Home</a></li>

			<li><a href="index.php">Dontknow</a></li>
			<li><a href="index.php">About Me</a></li>
			<li><a href="index.php">Contact</a></li>
		</ul>
		</div></div>
		<div>
			<?php
			if(isset($_SESSION['userId'])){
		echo '<form action="includes/logout.inc.php" method="post">
						
						<button type="submit" name=logout-submit >Logout</button>
					</form>';
	}
	else{
		echo '<h1 id="h1">WELCOME TO THE LOGIN PAGE OF LOCATION KEEPER</h1></br></br>
					<form id="form" action="includes/login.inc.php" method="post">
						<input id="input" type="text" name="mailuid"placeholder="User Name/Email.."></br>
						<input id="input"type="password" name="pwd"placeholder="password"></br>
						<button  type="submit" name="login-submit">Login</button>
					</form>
					<a id="input1"href="signup.php">Signup</a>
';
	}
			?>
		</div>
	</header>
</body>
</html>