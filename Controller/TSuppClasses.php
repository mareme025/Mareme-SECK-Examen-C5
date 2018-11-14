<?php
	require_once '../Model/classes.php';
	if (isset($_GET['codeClasse'])) 
	{
		$codeClasse = $_GET['codeClasse'];
		$result = deleteclasse($codeClasse);
		if ($result) 
		{
			header("location:../Views/ListesClasses.php");
		}
	}
?>