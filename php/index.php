<!DOCTYPE html>

<!-- index.php Thomas Crow 6/26/2018 -->
<!-- Last updated 7/24/2018 -->

<head>
	<title>SAT</title>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
	<?php
		session_start();
		include 'functions.php';
		$servername = "localhost";
		$username = "root";
		$password = "root";
		// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		// Connected successfully
		$sql = "SELECT * FROM sat_database.calendar ORDER BY starttime";
		$user = "SELECT * FROM sat_database.users ORDER BY username";
		$result = $conn->query($sql);
	?>
	<div class="menu">
		<table>
			<?php
				/* Check if user is logged in. */
				if($_SESSION['loggedin'] == true){
					?><tr>
						<td>
							<input style="display:none;" type="text" value="logout">
							<form action="#">
								<input value="Logout" type="submit">
							</form>
						</td>
					</tr><?php
				}else{
					?><tr onclick="location.href='login.php';" style="cursor:pointer;">
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
		<table style="border-style:solid;border-width:2px;width:75%;margin:0 auto;">
			<tr>
				<td>
					<h3><a href="login.php">Login</a></h3>
				</td>
			</tr>
			<tr>
				<td>
					<h3><a href="createaccount.php">Create account</a></h3>
				</td>
			</tr>
		</table>
		<div style="border-style:solid;border-width:2px;display:inline;">
			<a href="calendar.php">View full calendar</a>
		</div>
		<div style="border-style:solid;border-width:2px;display:inline;">
			<a href="noticeboard.php">View the notice board</a>
		</div>
	</div>
	<table class="notmenu">
  		<tr>
			<th>Time</th>
			<th>Meeting room 1</th>
			<th>Meeting room 2</th>
		</tr>
		<?php
	   	 // output data in each row
    		while($row = $result->fetch_assoc()) {
				echo "
					<tr>
	      				<td>".$row["starttime"]."</td>
	      				<td>".$row["meetingroom1status"]."</td>
	      				<td>".$row["meetingroom2status"]."</td>
		  			</tr>";
			}
		echo "</table>";
		$conn->close();
	?>
</body>
