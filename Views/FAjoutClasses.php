<!DOCTYPE html>
<html>
<head>
	<title>Ajout Classe</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Style/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="Style/style.css">
</head>
<body>
	
	<nav class="navbar navbar-inverse">
		<ul class="nav navbar-nav">
			<li><a href="ListesClasse.php">Gestion des Classes</a></li>
			<li><a href="ListesEleves.php">Gestion des Eleves</a></li>
		</ul>
	</nav>
	<div class="container col-md-6 col-md-offset-3 marge">
		<div class="panel panel-info">
			<div class="panel-heading">Formulaire d'ajout de Classe</div>
			<div class="panel-body">
				<form method="POST" action="../Controller/TAjoutClasses.php">
					<div class="form-group">
						<label>Libelle Classe</label>
						<input type="text" name="libelleClasse" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Nom Classe</label>
						<input type="text" name="nomClasse" class="form-control" required="">
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