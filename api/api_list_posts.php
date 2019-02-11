<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: text/html; charset=utf-8');

require('../model/connexion.php');
// require('../model/function.php');

function search_all_posts($bdd) {
    $reponse = $bdd->prepare('select p.id, p.created_date, p.img, p.title, p.content, p.id_authors, p.id_cat, a.firstname, c.name, p.alaune
         from posts as p 
         inner join authors as a on p.id_authors = a.id 
         inner join categories as c on p.id_cat =c.id');
    $reponse->execute();
    $list_post = array();
    while ($post = $reponse->fetch()) {
     
        $list_post[] = $post;
    }
    $reponse->closeCursor();
    return $list_post;
}

echo json_encode(search_all_posts($bdd));

?>