<?php
	require_once '../Model/classes.php';
	if (isset($_POST['envoyer'])) 
	{
		$codeClasse = $_POST['codeClasse'];
		$libelleClasse = $_POST['libelleClasse'];
		$nomClasse = $_POST['nomClasse'];
		$result = updateclasse($codeClasse,$libelleClasse,$nomClasse);
		if ($result) 
		{
			header('location:../Views/ListesClasses.php');
		}

	}
?>