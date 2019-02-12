<?php

	$all_cat = search_all_categories($bdd);
		$all_aut = search_all_authors($bdd);
		$one_post = PostQuery::searchOnePost($bdd,$_GET['id']);
			require('views/edition.php');

?>