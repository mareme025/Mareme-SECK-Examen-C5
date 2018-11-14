<?php
	require_once 'db_connect.php';
	function inserteleves($nomEleve,$prenomEleve,$datenaiss,$codeClasse)
	{
		$sql = "INSERT INTO eleves VALUES('','$nomEleve','$prenomEleve',$datenaiss,$codeClasse)";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}

	function listeleves()
	{
		$sql = "SELECT * FROM eleves";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}
?>