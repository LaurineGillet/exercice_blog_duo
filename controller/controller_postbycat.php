<?php

$post_by_cat = PostQuery::searchPostByCat($bdd,$_GET['id']);
		require('views/categories.php');

?>