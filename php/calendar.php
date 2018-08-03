<!DOCTYPE html>

<!-- calendar.php Thomas Crow 7/3/2018 -->
<!-- Last update 8/03/2018 -->

<head>
	<title>SAT</title>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
	<?php
		
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
		//echo "Connected successfully";
		$sql = "SELECT * FROM sat_database.calendar ORDER BY starttime";

		$result = $conn->query($sql);
	?>
	<div class="menu">
		<table>
			<tr onclick="location.href='login.php';" style="cursor:pointer;">
				<td>
					<h3>Login</h3>
				</td>
			</tr>
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
		<div style="border-style:solid;border-width:2px;display:inline;">
			<a href="calendarrequest.php">Request reservation</a>
		</div>
		<div style="border-style:solid;border-width:2px;display:inline;">
			<a href="calendarreview.php">Review reservations</a>
		</div>
		<div style="border-style:solid;border-width:2px;display:inline;">
			<a href="calendarcreate.php">Create reservation</a>
		</div>
	</div>
	<table class="notmenu">
  		<tr>
			<th>Time</th>
			<th>Meeting room 1</th>
			<th>Reserved by</th>
		</tr>
		<?php
    		while($row = $result->fetch_assoc()) {
				echo "
					<tr>
	      				<td>".$row["starttime"]."</td>
	      				<td>".$row["room"]."</td>
	      				<td>".$row["company"]."</td>";
	      		if($_SESSION["adminstatus"]){
	      			echo "<td><a href=\"calendardelete.php.php?deleteid=".row["calendarID"]."\">Delete</a></td>";
	      			}
		  		echo "</tr>";
			}
		echo "</table>";
		$conn->close();
	?>
</body>
