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

