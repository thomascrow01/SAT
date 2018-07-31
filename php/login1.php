<!DOCTYPE html>

<!-- login1.php Thomas Crow 7/31/2018 -->
<!-- Last updated 7/31/2018 -->

<head>
	<title>SAT</title>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
	<?php
		include 'functions.php';
	?>
	<div class="menu">
		<table>
			<tr onclick="location.href='php/login.php';" style="cursor:pointer;">
				<td>
					<h3>Login</h3>
				</td>
			</tr>
			<tr onclick="location.href='php/calendar.php';" style="cursor:pointer;">
				<td>
					<h3>Calendar</h3>
				</td>
			</tr>
			<tr onclick="location.href='php/noticeboard.php';" style="cursor:pointer;">
				<td>
					<h3>Notice board</h3>
				</td>
			</tr>
		</table>
	</div>
	<div class="notmenu">
		<form action="login2.php" method="POST">
			<table>
				<tr>
					<td>User name</td>
					<td><input name="username" type="text"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input name="password" type="text" id="password"></td>
					<script>
						// Change the password to be hidden.
						document.getElementById("password").type = "password";
					</script>
				<tr>
					<td></td>
					<td><input type="submit"></td>
				</tr>
			</table>
		</form>
	</div>
</body>