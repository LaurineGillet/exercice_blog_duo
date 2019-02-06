<?php
// Recupération tableau de tableau php
// echo"<h2>" .$json_article[$_GET['id']-1]['title']. "</h2>";
// echo $json_article[$_GET['id']-1]['body'];

//Récupération tableau d'objet Json
// echo"<h2>" .$json[$_GET['id']-1]->title. "</h2>";
// echo"<img src=".$json[$_GET['id']-1]->img.">";
// echo"<p>".$json[$_GET['id']-1]->body."</p>";

// Récupération sql
echo utf8_encode("<section class='article'><h2>".$one_post['title']. "</h2>");
echo "<img src='img/".$one_post['img']."'>";
echo utf8_encode("<p>".$one_post['content']."</p></section>");
echo date("d-m-Y", strtotime($one_post['created_date']));
?>

<div>
	<h3>Les commentaires de cet article:</h3>
<?php
if ($comment_by_post > 0){
	foreach ($comment_by_post as $value) {
		echo "<div>
			<span>".$value['author']." a écrit le ".$value['created_date']." :</span>
			<p>".$value['content']."</p>
		</div>";}
}else{
	echo "<p>Il n'y a pas de commentaires pour cet article.</p>";
}
?>
</div>

<form method="post" action="create_com" enctype="multipart/form-data">
	<input type="text" name="author" placeholder="Votre pseudo">
	<textarea name="content"></textarea>
	<button type="submit">Envoyer le commentaire</button>
</form>



