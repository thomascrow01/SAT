<!DOCTYPE html>

<!-- usercreate.php Thomas Crow 7/24/2018 -->
<!-- Last updated 7/24/2018 -->

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
		<form action="usercreate2.php" method="POST">
			<table>
				<tr>
					<td>Email address</td>
					<td><input type="text" name="email" value="<?php echo "$_SESSION['createemail']"; ?>" required /></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input name="username" type="text" value="<?php echo "$_SESSION['createusername']"; ?>" required /></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="password" required /></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="text" name="conpassword" required /></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit"></td>
				</tr>
			</table>
		</form>
	</div>
</body>