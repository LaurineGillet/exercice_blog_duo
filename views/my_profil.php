<section id="profil">

<?php 
	echo'<h2>Profil de '.$_SESSION['firstname'].' '.$_SESSION['lastname'].'</h2>
	<div>
		<div class="profil_card">
			<div>
				<h3>Mon image:</h3>
				<img src="img/'.$_SESSION['img'].'">
			</div>
			<div>
				<h3>Mon email:</h3>
				<p>'.$_SESSION['email'].'</p>
				<h3>Ma description:</h3>
				<p>'.$_SESSION['description'].'</p>
			</div>
			<div>
				<h3>Mes articles:</h3>
				<ul>';
if ($post_by_aut > 0){
	foreach ($post_by_aut as $value)
	{echo utf8_encode('<li><a href="post-'.$value['id'].'">'.$value['title'].'</a>/<li>');}
  	}else{
  echo "<li>Je n'ai pas encore écrit d'article.</li>";
}
?>
				</ul>

			</div>
		</div>
		<div>
			<h2>Changer mon profil:</h2>
			<form method="post" enctype="multipart/form-data" action="">
				<input type="text" name="firstname" placeholder="Prénom">
				<input type="text" name="lastname" placeholder="Nom">
				<input type="email" name="email" placeholder="Email">
				<input type="file" name="img">
				<textarea type="text" name="description" placeholder="Description"></textarea>
				<input type="password" name="password" placeholder="Password">
				<button type="submit" class="btn btn-sm btn-outline-secondary"> Je valide</button>
		</div>
	</div>
	</form>
</section>

