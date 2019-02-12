<?php
class AutQuery
{
	public function __construct()
	{

	}

	public static function searchAllAut($bdd)
	{
		$reponse = $bdd->prepare('select A.id, A.firstname, A.lastname, A.img, A.email, A.description
		from authors as A ');
		$reponse->execute();
    	$list_aut = array();
    	while ($aut = $reponse->fetch()) 
    	{
        	$list_aut[] = $aut;
    	}
    	$reponse->closeCursor();
    	return $list_aut;
	}

	public static function createAut($bdd, $firstname, $lastname, $img, $email, $password, $description, $level)
	{
		$new_name=MD5($img['name'].time());
		$extension=end(explode('.',$img['name']));
		move_uploaded_file($img['tmp_name'], 'img/'.$new_name.'.'.$extension);
   		 $reponse= $bdd->prepare("INSERT INTO authors(firstname, lastname, img, email, password, description, level) values(?,?,?,?,?,?,?)");
    	$reponse->execute(array(utf8_decode($firstname), utf8_decode($lastname), $new_name.'.'.$extension, $email, MD5($password), utf8_decode($description), $level));
   		$reponse->closeCursor();
	}
	
}