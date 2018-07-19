<!DOCTYPE html>

<!-- calendarcreate.php Thomas Crow 7/5/2018 -->
<!-- Last updated 7/19/2018 -->

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
		<form action="createreservation2.php" method="POST">
			<table>
				<tr>
					<td>Room</td>
					<td><select name="room"><option selected value="meetingroom1">Meeting room 1</option><option value="meetingroom2">Meeting room 2</option></td>
				</tr>
				<tr>
					<td>Company</td>
					<td><input name="company" type="text"></td>
				</tr>
				<tr>
					<td>Starting time</td>
					<td><input type="datetime-local" name="starttime" required /></td>
				</tr>
				<tr>
					<td>Ending time</td>
					<td><input type="datetime-local" name="endtime" required /></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
