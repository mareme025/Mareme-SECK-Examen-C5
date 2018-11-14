<!DOCTYPE html>
<html>
<head>
	<title>Ajout service</title>
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
			<div class="panel-heading">Formulaire d'inscription d'un eleve</div>
			<div class="panel-body">
				<form method="POST" action="../Controller/TAjoutEleves.php">
					<div class="form-group">
						<label>Nom Eleve</label>
						<input type="text" name="nomEleve" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Prenom Eleve</label>
						<input type="text" name="prenomEleve" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Date de Naissance</label>
						<input type="date" name="datenaiss" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Classe Associée</label>
						<select class="form-control" name="codeClasse" required="">
							<option  required="">Faites votre choix</option>
							<?php
								require_once '../Model/classes.php';
								$result = listclasses();
								while($tab = mysqli_fetch_row($result))
								{
									echo "<option value='$tab[0]'>$tab[1]</option>";
								}
								
							?>
						</select>
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