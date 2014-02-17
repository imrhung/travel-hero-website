<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quest Manager</title>
<link href="css/tablestyle.css" rel="stylesheet" type="text/css" />
</head>

<body>

<table border="1">
<tr>
	<th>Id</th>
	<th>Name</th>
	<th>Description</th>
	<th>Edit</th>
</tr>

<?php
$host = '127.0.0.1';
$username = 'user_hau';
$password = '123456';
$dbname = 'travel_hero';
$conn = mysqli_connect($host, $username, $password, $dbname);
								
if (mysqli_connect_errno())
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
									
// Select Parent Quest Id, name
$result = mysqli_query($conn, "SELECT * FROM quest WHERE parent_quest_id IS NOT NULL");
								
while($row = mysqli_fetch_array($result)) {
	echo '<tr><td>' . $row['id'] . '</td>';
	echo '<td>' . $row['name'] . '</td>';
	echo '<td>' . $row['description'] . '</td></tr>';
	echo '<td><a href="#">Edit</a></td>';
}
								
mysqli_close($conn);
?>
</table
</body>
</html>