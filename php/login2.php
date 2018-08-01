<!DOCTYPE html>

<!-- login2.php Thomas Crow 7/31/2018 -->
<!-- Last updated 7/31/2018 -->

<head>
	<title>SAT</title>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
	<?php
		session_start();
		include 'functions.php';
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$servername = "localhost";
		$username = "root";
		$password = "root";
		// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		//echo "Connected successfully";
		$sql = "SELECT * FROM sat_database.users ORDER BY Id";
		$result = $conn->query($sql);
		// A linear search will check to see if the username and password match any in the database.
		while($row = $result->fetch_assoc()) {
				if($row["username"] == $username and $row["password"] == $password){
					// if true, the session variable "loggedin" will be set to true.
					$_SESSION["loggedin"] = true;
					$_SESSION["username"] = $row["username"];
				}
			}
		$conn->close();
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
		<?php
			if($_SESSION["loggedin"]){
				?>
				<h4>You have logged in.</h4>
				<h5><a href="index.php">Go to index.</a></h5>
				<?php
			}else{
				?>
				<h4>Login failed.</h4>
				<h5><a href="login1.php">Go back.</a></h5>
				<?php
			}
		?>
	</div>
</body>
