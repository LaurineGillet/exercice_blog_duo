<?php

if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['category']) && isset($_POST['author']) &&isset($_FILES['file']) && isset($_SESSION['id']) && isset($_SESSION['level'])) 
{
	// create_post ($bdd,$_POST['title'], $_POST['content'], $_POST['category'], $_POST['author'], $_FILES['file']);
	PostQuery::createPost($bdd, $_POST['title'], $_POST['content'], $_POST['category'], $_POST['author'], $_FILES['file']);
	header('location:articles');
}

?>