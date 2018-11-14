<?php
	require_once 'db_connect.php';
	function insertclasses($libelleClasse,$nomClasse)
	{
		$sql = "INSERT INTO classe VALUES('','$libelleClasse','$nomClasse')";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}

	function listclasses()
	{
		$sql = "SELECT * FROM classe";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);

		return $result; 
	}

	function deleteclasse($codeClasse)
	{
		$sql = "DELETE FROM classe WHERE codeClasse=$codeClasse";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}

	function updateclasse($codeClasse,$libelleClasse,$nomClasse)
	{
		$sql = "UPDATE classe SET libelleClasse='$libelleClasse', nomClasse='$nomClasse' WHERE codeClasse=$codeClasse";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}	

	function getclassebyid($codeClasse)
	{
		$sql = "SELECT * FROM classe WHERE codeClasse=$codeClasse";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}
?>