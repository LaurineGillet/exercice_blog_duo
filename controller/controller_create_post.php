<?php


	create_post ($bdd,$_POST['title'], $_POST['content'], $_POST['category'], $_POST['author'], $_FILES['file']);
	header('location:articles');

?>