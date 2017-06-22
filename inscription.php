<?php
require_once('inc/init.inc.php');
require_once('inc/haut.inc.php');

?>


<form class="inscription" method="post" action="">
	<label><strong>Pseudo</strong></label><br>
	<input type="text" name="pseudo"><br><br>

	<label><strong>Mot de passe</strong></label><br>
	<input type="password" name="mdp"><br><br>


	
	<label><strong>Nom</strong></label><br>
	<input type="text" name="nom"><br><br>


	<label><strong>Prenom</strong></label><br>
	<input type="text" name="prenom" ><br><br>

	<label><strong>Civilite</strong></label><br>
	<select>
		<option value="m">M</option>
		<option value="f">F</option>
	</select><br><br>

	<label><strong>Téléphone</strong></label><br>
	<input type="text" name="telephone"><br><br>


	<label><strong>Email</strong></label><br>
	<input type="email" name="email" placeholder="jean@hotmal.fr..."><br><br>


	
	
	<input type="submit" value="Inscription"><br><br>

</form>







<?php

require_once('inc/bas.inc.php');


?>