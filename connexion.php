<?php
require_once('inc/init.inc.php');
require_once('inc/haut.inc.php');

?>




<form class="connexion" method="post" action="">
	<label><strong>Identifiant</strong></label><br>
	<input type="text" name="identifiant" placeholder="Yoan28.."><br><br>

	<label><strong>Mot de passe</strong></label><br>
	<input type="password" name="mdp" placeholder="mot de passe..."><br><br>
	<input type="submit" value="Connexion"><br><br>
<span> Vous n'avez pas encore de compte ? Inscrivez vous <a href="inscription.php"> ICI </a></span> 
</form>





<?php

require_once('inc/bas.inc.php');


?>