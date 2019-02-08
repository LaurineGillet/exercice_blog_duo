<?php

$comment_by_post = search_com_by_post($bdd,$_GET['id']);
		$one_post = search_one_post($bdd,$_GET['id']);
		require('views/article.php');
?>