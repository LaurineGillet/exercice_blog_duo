<?php 


	//boucle php, isset vérifie si l'élément existe
	$user = search_user($bdd, $_POST['email'], $_POST['password']);
	//ici on crée une variable qui récupère les infos de connexion
	if ($user){
$_SESSION['id'] = $user['id'];
$_SESSION['firstname'] = $user['firstname'];
$_SESSION['lastname'] = $user['lastname'];
$_SESSION['description'] = $user['description'];
$_SESSION['email'] = $user['email'];
$_SESSION['level'] = $user['level'];
$_SESSION['img'] = $user['img'];
// $_SESSION['password'] = isset($user['password']) ? $user['password'] : NULL;
// si toutes les info sont valides et existent alors "connexion réussi"
 // var_dump($_SESSION['level']);
echo "Connection réussie";	
	}else{
		echo 'Mot de passe ou email incorrect';
	} // affiche si oui ou non on est co



?>