<?php
class PostQuery{
	private $_bdd;

	public function __construct()
	{

	}

	public static function searchAllPosts($bdd)
	{
		$reponse = $bdd->prepare('select p.id, p.created_date, p.img, p.title, p.content, p.id_authors, p.id_cat, a.firstname, c.name, p.alaune
         from posts as p 
         inner join authors as a on p.id_authors = a.id 
         inner join categories as c on p.id_cat =c.id');

    	$reponse->execute();
    	$list_post = array();
   		while ($post = $reponse->fetch()) 
   		{
       		$list_post[] = $post;
    	}
    	$reponse->closeCursor();
    	return $list_post;
	}

	public static function searchOnePost($bdd,$id)
	{
		$reponse2 = $bdd->prepare('select p.id, p.created_date, p.img, p.title, p.content, a.firstname, c.name, p.alaune
         from posts as p
         inner join authors as a on p.id_authors = a.id 
         inner join categories as c on p.id_cat =c.id
         where p.id=?');
    	$reponse2->execute(array($id));
    	$solo_post=$reponse2->fetch();
    	$reponse2->closeCursor();
    	return $solo_post;
	}

	public static function searchPostByCat($bdd, $id)
	{
		$reponse = $bdd->prepare('select p.id, p.created_date, p.img, p.title, p.content, a.firstname, c.name, p.id_cat, p.id_authors from posts as p 
        inner join authors as a on p.id_authors = a.id 
        inner join categories as c on p.id_cat =c.id 
        where c.id = ?');
   		$reponse->execute(array($id));
    	while ($cat = $reponse->fetch()) 
    	{
        	$one_cat[] = $cat;
   		}
    	$reponse->closeCursor();
    	return $one_cat;
	}	

	public static function searchPostByAut($bdd,$id)
	{
		 $reponse = $bdd->prepare('select p.id, p.created_date, p.img, p.title, p.content, a.firstname, c.name, p.id_cat, p.id_authors from posts as p 
        inner join authors as a on p.id_authors = a.id 
        inner join categories as c on p.id_cat =c.id 
        where p.id_authors = ?');
    	$reponse->execute(array($id));
    	while ($post = $reponse->fetch()) 
    	{
        	$one_post[] = $post;
    	}
    	$reponse->closeCursor();
    	return $one_post;
	}

	public static function createPost($bdd, $title, $content, $category, $author, $file)
	{
		$new_name=MD5($file['name'].time());
		$extension=end(explode('.',$file['name']));
		move_uploaded_file($file['tmp_name'], 'img/'.$new_name.'.'.$extension);

    $reponse= $bdd->prepare("INSERT INTO posts(title, img, content, id_cat, id_authors, created_date, updated_date) VALUES(?,?,?,?,?,?,?)");
    $reponse->execute(array(utf8_decode($title), $new_name.'.'.$extension, utf8_decode($content), $category, $author, date("Y-m-d H:i:s"), date("Y-m-d H:i:s")));
    $reponse->closeCursor();
	}

	public static function updateOnePost($bdd, $id, $title, $content, $id_cat, $id_authors)
	{
		$reponse2 = $bdd->prepare('UPDATE posts SET title=?, content=?, id_cat=?, id_authors=?  WHERE id=?');
    	$reponse2 -> execute(array($title, $content, $id_cat, $id_authors, $id));
	}	

	public static function deleteOnePost($bdd, $id)
	{
		$my_post = search_one_post($bdd,$id);
		unlink('img/'.$my_post['img']);
		$reponse3 = $bdd->prepare('delete from posts where posts.id=?');
		$reponse3 -> execute(array($id));
		$delete_post = $reponse3->fetch();
		return $delete_post;
	}

}

?>