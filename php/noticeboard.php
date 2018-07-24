<!DOCTYPE html>

<!-- noticeboard.php Thomas Crow 7/25/2018 -->
<!-- Last update 7/25/2018 -->

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
		$sql = "SELECT * FROM sat_database.noticeboard ORDER BY date";
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
			<a href="createnoticeboard.php">Create Notice</a>
		</div>
	</div>
	<?php
    	while($row = $result->fetch_assoc()) {
			echo "
				<div>
					<h1>".$row["creator"]."</h1>
					<h4>".$row["date"]."</h4>
     				<p>".if(isset($_REQUEST['save']))
						{
							$file_contents = $_REQUEST['contents'];
							file_put_contents('$row["file"]',$file_contents);
						}
						$file_contents = file_get_contents('$row["file"]');
						print $file_contents";."</p>
						</div>
						}
						$conn->close();
	?>
</body>