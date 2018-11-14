<!DOCTYPE html>
<html>
<head>
	<title>Eleves</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<script type="text/javascript" src="JS/script.js"></script>
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
			<div class="panel-heading">Liste des Eleves</div>
				<div class="panel-body">
					<a href="FAjoutEleves.php" class="btn btn-info">Inscription d'un eleve</a>
					<table class="table table-bordered table-striped">
						<tr>
							<th>Matricule</th>
							<th>Nom Eleve</th>
							<th>Prenom Eleve</th>
							<th>Date de Naissance</th>
							<th>Classe associé</th>
						</tr>
						<?php
							require_once '../Model/eleves.php';
							require_once '../Model/classes.php';

							$result = listeleves();
							while ($tab = mysqli_fetch_row($result)) 
							{
								$classe = getclassebyid($tab[4]);
								$row = mysqli_fetch_row($classe);
								echo "<tr>";
									echo "<td>$tab[0]</td>";
									echo "<td>$tab[1]</td>";
									echo "<td>$tab[2]</td>";
									echo "<td>$tab[3]</td>";
									echo "<td>$tab[4]</td>";
								echo "</tr>";
							}
						?>
					</table>
				</div>
		</div>
	</div>
</body>
</html>