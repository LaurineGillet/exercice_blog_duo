<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
try{
    $bdd = new PDO('mysql:host=localhost;dbname=blog12devs', 'root', '');
}
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
};
function search_all_posts($bdd)
{
   $reponse = $bdd->prepare('select p.id, p.created_date, p.img, p.title, p.content, p.id_authors, p.id_cat, a.firstname, c.name, p.alaune
         from posts as p 
         inner join authors as a on p.id_authors = a.id 
         inner join categories as c on p.id_cat =c.id order by p.id ASC');
   $reponse->execute();
   $list_post = array();
   $one_post = array();
   while ($post = $reponse->fetch()) {
       $one_post = ['id' => $post['id'], 'title' => utf8_encode($post['title']), 'content' => utf8_encode($post['content']), 'id_cat' => $post['id_cat'],'id_authors' => $post['id_authors'],'created_date' => $post['created_date'],'firstname' => utf8_encode($post['firstname']),'name' => utf8_encode($post['name'])];
        $list_post[] = $one_post;
   }
   $reponse->closeCursor();
   return $list_post;
}
echo json_encode(search_all_posts($bdd));
?>