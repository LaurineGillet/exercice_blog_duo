<?php

$post_by_aut = search_post_by_aut($bdd,$_GET['id']);
			require('views/articles_by_author.php');


?>