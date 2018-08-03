
<!-- functions.php Thomas Crow 7/5/2018 -->
<!-- Last updated 8/3/2018 -->

<?php
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
