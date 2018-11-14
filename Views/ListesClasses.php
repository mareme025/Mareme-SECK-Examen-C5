<!DOCTYPE html>
<html>
<head>
	<title>Listes des Classes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Style/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="Style/style.css">
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
			<div class="panel-heading">Liste des Classes</div>
				<div class="panel-body">
					<a href="FAjoutClasses.php" class="btn btn-info">Ajout Nouvelle Classe</a>
					<table class="table table-bordered table-striped">
						<tr>
							<th>Code Classe</th>
							<th>Libelle Classe</th>
							<th>Nom Classe</th>
							<th>Action1</th>
							<th>Action2</th>
						</tr>
						<?php
							require_once '../Model/classes.php';
							$result = listclasses();
							while ($tab = mysqli_fetch_assoc($result)) 
							{
								echo "<tr>";
									echo "<td>$tab[codeClasse]</td>";
									echo "<td>$tab[libelleClasse]</td>";
									echo "<td>$tab[nomClasse]</td>";
									echo "<td><a href='FModifClasses.php?codeClasse=$tab[codeClasse]' class='btn btn-info btn-block'>Modifier</a></td>";
									echo "<td><a href='../Controller/TSuppClasses.php?codeClasse=$tab[codeClasse]' class='btn btn-danger btn-block' onClick='return confirmation();'>Supprimer</a></td>";
								echo "</tr>";
							}
						?>
					</table>
				</div>
		</div>
	</div>
</body>
</html>