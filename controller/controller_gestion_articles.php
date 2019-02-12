<?php

$all_posts = PostQuery::searchAllPosts($bdd);
// $all_posts = search_all_posts($bdd);
require('views/gestion_articles.php');

?>