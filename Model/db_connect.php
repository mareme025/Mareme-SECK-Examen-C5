<?php
	function getConnection()
	{
		$host = "localhost";
		$user = "root";
		$password = "";
		$db_name = "gestion_ecole";
		$connect = mysqli_connect($host, $user, $password, $db_name);
		return $connect;
	}

	function closeConnection($connect)
	{
		mysqli_close($connect);
	}
?>