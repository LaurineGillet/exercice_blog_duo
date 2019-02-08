<?php


	var_dump($_POST);
// on vérifie si il y a une action, et si l'action est "edition"
// update_one_post($bdd, $_POST['id'], $_POST['title'], $_POST['content']);
	update_one_post($bdd, $_POST['id'], $_POST['title'], $_POST['content'], $_POST['id_cat'], $_POST['id_authors']);
	echo"<script> alert('Bravo, tu as bien édité cet article');</script>";
	header('location:post-'.$_POST['id']);




?>