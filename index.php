<?php
// $users = file_get_contents("https://jsonplaceholder.typicode.com/posts");
// $json = json_decode($users);
// $json_article=json_decode($users, true);

// $users = file_get_contents("model/articles.json"); 
// $json = json_decode($users);
// $json_article=json_decode($users, true);

session_start();

require('model/connexion.php'); //permet de linker la page qui recup la bdd
require('model/function.php'); //permet de linker la page des functions


if(isset($_POST['email']) && isset($_POST['password'])){
	//boucle php, isset vérifie si l'élément existe
	$user = search_user($bdd, $_POST['email'], $_POST['password'], $_POST['level']);
	//ici on crée une variable qui récupère les infos de connexion
	if ($user){
$_SESSION['id'] = $user['id'];
$_SESSION['firstname'] = $user['firstname'];
$_SESSION['email'] = $user['email'];
$_SESSION['level'] = $user['level'];
$_SESSION['password'] = isset($user['password']) ? $user['password'] : NULL;
// si toutes les info sont valides et existent alors "connexion réussi"
 // var_dump($_SESSION['level']);
echo "Connection réussie";	
	}else{
		echo 'Mot de passe ou email incorrect';
	} // affiche si oui ou non on est co

}


if(isset($_GET['stopsession'])&& ($_GET['stopsession']) =='yes'){
	unset($_SESSION['id']);
	unset($_SESSION['email']);
	unset($_SESSION['password']);
	session_destroy();
//on vérifie si la seession est fermée, si oui, on déconnecte l'id le mail et le mdp
}



if(isset($_GET['action']) && $_GET['action'] == 'update' ){
// on vérifie si il y a une action, et si l'action est "edition"
update_one_post($bdd, $_POST['id'], $_POST['title'], $_POST['content'], $_POST['id_cat'], $_POST['id_authors']);
echo"<script> alert('Bravo, tu as bien édité cet article');</script>";
var_dump($_GET['action']);
}

if(isset($_GET['action']) &&($_GET['action'])=="supp"){
	//on vérifie si il y a une action et si c'est l'action de supprimer
	delete_one_post($bdd,$_GET['id']);
echo"<script> alert('Attention tu vas supprimer cet article');</script>";
}

if(isset($_GET['action']) &&($_GET['action'])=="create"){
	create_post ($bdd,$_POST['title'], $_POST['content'], $_POST['category'], $_POST['author'], $_FILES['file']);
}

if(isset($_GET['action']) &&($_GET['action'])=="new_user"){
	create_user ($bdd, $_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password'], $_POST['level']);
}

require('views/head.php');
require('views/header.php');
//importe le head et le header de la page

if (isset($_GET['page'])) {
	switch ($_GET['page']){
		case'about':
			require('views/about.php');
			break;
			//boucle qui vérifie l'existence d'un url et affiche la page relative
		case'articles':
				$all_posts = search_all_posts($bdd);

				// var_dump($all_posts);
			require('views/articles.php');
			break;
			//idem pour page articles
		case'article':
		$one_post = search_one_post($bdd,$_GET['id']);
		
			require('views/article.php');
			break;
		case'contact':
			require('views/contact.php');
			break;

		case'edition':
		$all_cat = search_all_categories($bdd);
		$all_aut = search_all_authors($bdd);
		$one_post = search_one_post($bdd,$_GET['id']);
			require('views/edition.php');
			break;

		case'create':
		$all_cat = search_all_categories($bdd);
		$all_aut = search_all_authors($bdd);
			require('views/create.php');
			break;

		case'new_user':
		$all_aut = search_all_authors($bdd);
			require('views/new_user.php');
			break;

	
	}
} else{
		require('views/home.php');
		//page de base si les autres conditions ne sont pas réalisées
	}

require('views/footer.php');

?>