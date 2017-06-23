<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Annonceo</title>
	<link rel="stylesheet" type="text/css" href="/projet-annonceo/inc/css/style.css">
</head>

<body>
	<header>
		<div class="conteneur">
			<nav>
				 <?php
				
					if(internauteEstConnecteEtEstAdmin())
					{
				
						echo '<a href="' . URL . 'admin/gestion_annonces.php">Gestion des annonces</a>';
						echo '<a href="' . URL . 'admin/gestion_categories.php">Gestion des catégories</a>';
						echo '<a href="' . URL . 'admin/gestion_membres.php">Gestion des membres</a>';
						echo '<a href="' . URL . 'admin/gestion_commentaire.php">Gestion des commentaires</a>';
						echo '<a href="' . URL . 'admin/gestion_notes.php">Gestion des notes</a>';
				
					}
					if(internauteEstConnecte())
					{
						echo '<a href="' . URL . 'index.php">Annonceo</a>';
						echo '<a href="' . URL . 'index.php">Qui sommes nous ?</a>';
						echo '<a href="' . URL . 'contact.php">Contact</a>';
						echo '<input type="search" name="search" id="search" placeholder="Recherche...">';
						echo '<a href="' . URL . 'connexion.php?action=deconnexion"> Se déconnecter</a>';
						
					}
				 	else
					{
						echo '<a href="' . URL . 'index.php">Annonceo</a>';
						echo '<a href="' . URL . 'index.php">Qui sommes nous ?</a>';
						echo '<a href="' . URL . 'contact.php">Contact</a>';
						echo '<input type="search" name="search" id="search" placeholder="Recherche...">';
						echo '<a href="' . URL . 'connexion.php">Espace Membre</a>';						
					}
					?> 
				<!-- <ul>
						<li><a href="index.php" title="Annonceo">Annonceo</a>
						<li><a href="#">Qui sommes nous ?</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><input type="search" name="search" id="search" placeholder="Recherche...">
						<li><a href="connexion.php">Espace Membre</a></li>
				</ul> -->
			</nav>
		</div>
	</header>


	<section>
		<div class="conteneur">