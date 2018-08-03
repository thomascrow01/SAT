<!DOCTYPE html>

<!-- logout.php Thomas Crow 8/03/2018 -->
<!-- Last updated 8/03/2018 -->

<head>
	<title>SAT</title>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
	<?php
		/* changes the values of the session variable */
		session_start();
		include 'functions.php';
		$_SESSION["loggedin"] = false;
		$_SESSION["username"] = "";
		$_SESSION["name"] = "";
		$_SESSION["adminstatus"] = false;
	?>
	<div class="menu">
		<table>
			<?php
				/* Check if user is logged in. */
				if($_SESSION['loggedin'] == true){
					?><tr onclick="location.href='logout.php';" style="cursor:pointer;">
						<td>
							<h3>Logout</h3>
						</td>
					</tr><?php
				}else{
					?><tr onclick="location.href='login1.php';" style="cursor:pointer;">
						<td>
							<h3>Login</h3>
						</td>
					</tr><?php
				}
			?>
			<tr onclick="location.href='calendar.php';" style="cursor:pointer;">
				<td>
					<h3>Calendar</h3>
				</td>
			</tr>
			<tr onclick="location.href='noticeboard.php';" style="cursor:pointer;">
				<td>
					<h3>Notice board</h3>
				</td>
			</tr>
		</table>
	</div>
	<div class="notmenu">
		<h2>You have logged out.</h2>
	</div>
		$conn->close();
	?>
</body>
