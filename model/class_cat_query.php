<?php
class CatQuery
{
	public function __construct()
	{

	}

	public static function searchOneCat($bdd,$id)
	{
		 $reponse2 = $bdd->prepare('select c.id, c.name
         from categories as c
         inner join authors as a on c.id_authors = a.id 
         inner join categories as c on c.id_cat =c.id
         where c.id=?');
    	$reponse2->execute(array($id));

    	$solo_post=$reponse2->fetch();
    	$reponse2->closeCursor();
    	return $solo_post;}
	}

	public static function searchAllCat($bdd)
	{
		$reponse = $bdd->prepare('select c.id, c.name
		from categories as c');
		$reponse->execute();
    	$list_cat = array();
    	while ($cat = $reponse->fetch()) 
    	{
        	$list_cat[] = $cat;
   		}
    	$reponse->closeCursor();
    	return $list_cat;
	}
}