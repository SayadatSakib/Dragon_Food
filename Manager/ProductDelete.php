<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dragonfoods";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	// sql to delete a record

	$p_id = $_POST['p_id'];

	$sql = "DELETE FROM produc_table WHERE p_id=$p_id";

	if (mysqli_query($conn, $sql)) {
	    echo true;
	} else {
	    echo false;
	}

	mysqli_close($conn);
?>