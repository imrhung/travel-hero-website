<?php
$host = '127.0.0.1';
$username = 'user_hau';
$password = '123456';
$dbname = 'travel_hero';
$conn = mysqli_connect($host, $username, $password, $dbname);
								
if (mysqli_connect_errno())
	echo "Failed to connect to MySQL: " . mysqli_connect_error();