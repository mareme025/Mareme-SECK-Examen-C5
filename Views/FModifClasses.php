<?php
	require_once '../Model/classes.php';
	if (isset($_GET['codeClasse'])) 
	{
		$codeClasse = $_GET['codeClasse'];
		$result = getclassebyid($codeClasse);
		$tab = mysqli_fetch_row($result);

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ajout classe</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	
	<nav class="navbar navbar-inverse">
		<ul class="nav navbar-nav">
			<li><a href="ListesClasses.php">Gestion des Classes</a></li>
			<li><a href="ListesEleves.php">Gestion des Eleves</a></li>
		</ul>
	</nav>
	<div class="container col-md-6 col-md-offset-3 marge">
		<div class="panel panel-info">
			<div class="panel-heading">Formulaire de modification de classe</div>
			<div class="panel-body">
				<form method="POST" action="../Controller/TModifClasses.php">
					<div class="form-group">
						<label>Code Classe</label>
						<input type="text" name="codeClasse" readonly="" class="form-control" required="" value="<?= $tab[0] ?>">
					</div>
					<div class="form-group">
						<label>Libelle Classe</label>
						<input type="text" name="libelleClasse" class="form-control" required="" value="<?= $tab[1] ?>">
					</div>
					<div class="form-group">
						<label>Nom Classe</label>
						<input type="text" name="nomClasse" class="form-control" value="<?= $tab[2] ?>">
					</div>
					<div class="form-group">
				<input type="submit" name="envoyer" value="Envoyer" class="btn btn-success">
				<input type="reset" name="annuler" value="Annuler" class="btn btn-danger">
			</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>