<?php

//afficher tous les articles sur la page de presentation
function search_all_posts($bdd) {
	$reponse = $bdd->prepare('select p.id, p.created_date, p.img, p.title, p.content, a.firstname, c.name
         from posts as p 
         inner join authors as a on p.id_authors = a.id 
         inner join categories as c on p.id_cat =c.id');
//fonction permettant de récuperer les informations voulues dans la bdd
    $reponse->execute();
    $list_post = array();
    while ($post = $reponse->fetch()) {
     
        $list_post[] = $post;
    }
    $reponse->closeCursor();
    return $list_post;
}

// afficher/récuperer l'article selectionné précédemment
function search_one_post($bdd,$id) {
	$reponse2 = $bdd->prepare('select p.id, p.created_date, p.img, p.title, p.content, a.firstname, c.name
         from posts as p
         inner join authors as a on p.id_authors = a.id 
         inner join categories as c on p.id_cat =c.id
         where p.id=?');
    $reponse2->execute(array($id));

    $solo_post=$reponse2->fetch();
    $reponse2->closeCursor();
    // var_dump($solo_post);
    return $solo_post;}



function search_all_categories($bdd){
	$reponse = $bdd->prepare('select c.id, c.name
		from categories as c');
	$reponse->execute();
    $list_cat = array();
    while ($cat = $reponse->fetch()) {
     
        $list_cat[] = $cat;
    }
    $reponse->closeCursor();
    return $list_cat;
}

function search_all_authors($bdd){
	$reponse = $bdd->prepare('select A.id, A.firstname, A.lastname, A.email 
		from authors as A ');
	 $reponse->execute();
    $list_aut = array();
    while ($aut = $reponse->fetch()) {
     
        $list_aut[] = $aut;
    }
    $reponse->closeCursor();
    return $list_aut;
	
}

// Créer un nouveau post
function create_post ($bdd, $title, $content, $category, $author, $file){
// var_dump($file);
$new_name=MD5($file['name'].time());
// var_dump($new_name);
$extension=end(explode('.',$file['name']));
move_uploaded_file($file['tmp_name'], 'img/'.$new_name.'.'.$extension);

    $reponse= $bdd->prepare("INSERT INTO posts(title, img, content, id_cat, id_authors, created_date, updated_date) values(?,?,?,?,?,?,?)");
    $reponse->execute(array(utf8_decode($title), $new_name.'.'.$extension, utf8_decode($content), $category, $author, date("Y-m-d H:i:s"), date("Y-m-d H:i:s")));
    $reponse->closeCursor();
    
}

//Editer un post
function update_one_post($bdd,$id,$title,$content, $id_cat, $id_authors) {
	$reponse = $bdd->prepare('update posts 
	set title=?, content=?, id_cat=?, id_authors=?, updated_date=? where id=?');
	$reponse -> execute(array($title,$content, $id_cat, $id_authors, date("Y-m-d H:i:s"), $id));


}


// Supprimer un post
function delete_one_post($bdd,$id) {
	$my_post = search_one_post($bdd,$id);
	unlink('img/'.$my_post['img']);
	$reponse3 = $bdd->prepare('delete from posts where posts.id=?');
	$reponse3 -> execute(array($id));
	$delete_post = $reponse3->fetch();
	return $delete_post;
}

// Connexion
function search_user ($bdd, $email, $password){
	$reponse = $bdd->prepare('select A.id, A.firstname, A.lastname, A.email 
		from authors as A 
		where (A.email=? AND A.password=?)');
	$reponse->execute(array($email, MD5($password)));
	$user=$reponse->fetch();
	return $user;

}
?>
