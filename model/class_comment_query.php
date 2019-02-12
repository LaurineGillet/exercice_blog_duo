<?php
class CommentQuery
{
	public function __construct()
	{

	}

	public static function searchComByPost($bdd,$id)
	{
		$reponse = $bdd->prepare('select c.id, c.content, c.author, c.created_date, c.id_posts
        from comments as c 
        inner join posts as p on c.id_posts = p.id 
        where p.id=?');
    	$reponse->execute(array($id));
    	while ($com = $reponse->fetch()) 
    	{
        	$one_com[] = $com;
    	}
   		$reponse->closeCursor();
    	return $one_com;
	}

	public static function createCom($bdd, $content, $author, $posts)
	{
		$reponse= $bdd->prepare("INSERT INTO comments(content, author, created_date, id_posts ) VALUES(?,?,?,?)");
    	$reponse->execute(array(utf8_decode($content), utf8_decode($author), date("Y-m-d H:i:s"), $posts));
    	$reponse->closeCursor();
	}
}