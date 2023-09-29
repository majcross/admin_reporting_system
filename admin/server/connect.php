<?php
	$servername = "localhost";
		$username = "seapmfi2_mneadmin";
		$password = "Adminuser123456";
		$db_name = "seapmfi2_evaluation";

		$conn = mysqli_connect($servername,$username,$password,$db_name);

		if (!$conn) {
			die("connection failed". mysqli_connect_error());
		}

?>