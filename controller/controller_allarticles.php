<?php

// $postQuery = new PostQuery();
// $all_posts = $postQuery->searchAllPosts($bdd);

$all_posts = PostQuery::searchAllPosts($bdd);

// $all_posts = search_all_posts($bdd);
require('views/articles.php');




?>