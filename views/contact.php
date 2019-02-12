<h2>Laissez-nous un message !</h2>
	<form action="fonction/envoi.php" method="post" enctype="multipart/form-data">
		<div class="form-row">
			<div class="col">
				<input id="name" type="text" name="username" class="form-control" placeholder=" Votre nom" /><br/>
			</div>
			<div class="col">
				<input id="mail" type="mail" name="usermail" class="form-control" placeholder=" Votre email" /><br/>
			</div>
		</div>
		<textarea id="comment" name="texte" placeholder=" Votre message"></textarea><br/>
		<input type="checkbox" id='rgpd'>J'ai lu et accepté notre politique de confidentialité des données<br>
		<button id="valid" class="button" type="submit"><span>Envoyer</span></button>
</form>