<?php
	require_once('inc/init.inc.php');
	require_once('inc/haut.inc.php');
?>

	<h1>Déposer une annonce</h1>

	<!-- <form method="post" action="" enctype="multipart/form-data">

		<label for="titre">Titre : </label><br>
		<input type="text" id="titre" name="titre">' . $titre . '</textarea><br><br>

		<label for="description">Description : </label><br>
		<textarea id="description" name="description">' . $description . '</textarea><br><br>

		<label for="couleur">Couleur : </label><br>
		<input type="text" id="couleur" name="couleur" required value="'. $couleur . '"><br><br>

		<label for="taille">Taille : </label><br>
		<input type="text" id="taille" name="taille" required value="'. $taille . '"><br><br>

		<label for="public">Public : </label><br>
		<select name="public">
			<option value="">Faites un choix</option>
			<option value="m"';if($public == 'm') echo 'selected'; echo'>Homme</option>
			<option value="f"';if($public == 'f') echo 'selected'; echo'>Femme</option>
			<option value="mixte"';if($public == 'mixte') echo 'selected'; echo'>Mixte</option>
		</select><br><br>

		<label for="photo">Photo : </label><br>
		<input type="file" id="photo" name="photo" value="'. $photo . '"><br><br>';
		if(!empty($photo)) //Si y'a une photo
		{
			echo '<i>Vous pouvez uploader une nouvelle photo si vous souhaitez la changer</i><br>';
			echo '<img src = "' . $photo . '" width="90" height="90"><br>';
		}
		//On creer un champ en 'hidden' pour mettre la photo actuelle dans le POST
		echo '<input type="hidden" id="photo_actuelle" name="photo_actuelle" value="'. $photo . '">';

		//On reprend le echo du form
		echo ' 
		<label for="prix">Prix : </label><br>
		<textarea id="prix" name="prix">'. $prix . '</textarea><br><br>

		<label for="stock">Stock : </label><br>
		<textarea id="stock" name="stock">'. $stock . '</textarea><br><br>

		<input type="submit" value="Valider"><br><br>

	</form> -->


<?php
	require_once('inc/bas.inc.php');
?>
