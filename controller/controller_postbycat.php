<?php

$post_by_cat = search_post_by_cat($bdd,$_GET['id']);
		require('views/categories.php');

?>