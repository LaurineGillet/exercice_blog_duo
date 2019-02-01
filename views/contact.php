<h2>Laissez-nous un message !</h2>
	<form action="fonction/envoi.php" method="post" enctype="multipart/form-data">
		<input id="name" type="text" name="username" placeholder=" Votre nom" /><br/>
		<input id="mail" type="mail" name="usermail" placeholder=" Votre email" /><br/>
		<textarea id="comment" name="texte" placeholder=" Votre message"></textarea><br/>
		<input type="checkbox" id='rgpd'>J'ai lu et accepté notre politique de confidentialité des données<br>
		<button id="valid" class="button" type="submit"><span>Envoyer</span></button>
</form>