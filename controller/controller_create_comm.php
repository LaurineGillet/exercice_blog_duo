<?php


	create_comment ($bdd, $_POST['content'], $_POST['author'], $_POST['posts']);
	header('location:post-'.$_POST['posts']);


?>