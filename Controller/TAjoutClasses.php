<?php
	require_once '../Model/classes.php';
	if (isset($_POST['envoyer'])) 
	{
		$libelleClasse = $_POST['libelleClasse'];
		$nomClasse = $_POST['nomClasse'];
		$result = insertclasses($libelleClasse,$nomClasse);
		if ($result) 
		{
			header('location:../Views/ListesClasses.php');
		}

	}
?>