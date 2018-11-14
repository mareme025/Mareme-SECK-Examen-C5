<?php
	require_once '../Model/eleves.php';
	if (isset($_POST['envoyer'])) 
	{
		$nomEleve = $_POST['nomEleve'];
		$prenomEleve = $_POST['prenomEleve'];
		$datenaiss = $_POST['datenaiss'];
		$codeClasse = $_POST['codeClasse'];
		$result = inserteleves($nomEleve,$prenomEleve,$datenaiss,$codeClasse);
		if ($result) 
		{
			header('location:../Views/ListesEleves.php');
		}

	}
?>