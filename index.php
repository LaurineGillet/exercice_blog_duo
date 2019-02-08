<?php

session_start();

require('model/connexion.php'); //permet de linker la page qui recup la bdd
require('model/function.php'); //permet de linker la page des functions



if(isset($_GET['action']) && ($_GET['action'])=="login"){
require('controller/controller_login.php');
}


if(isset($_GET['stopsession'])&& ($_GET['stopsession']) =='yes'){
require('controller/controller_logout.php');
}



if(isset($_GET['action']) && $_GET['action'] == 'update' ){
require('controller/controller_update_post.php');
}



if(isset($_GET['action']) &&($_GET['action'])=="supp"){
require('controller/controller_supp_post.php');
}


if(isset($_GET['action']) &&($_GET['action'])=="create"){
require('controller/controller_create_post.php');
}



if(isset($_GET['action']) && ($_GET['action'])=="create_com"){
require('controller/controller_create_comm.php');
}


if(isset($_GET['action']) && ($_GET['action'])=="new_user"){
require('controller/controller_new_user.php');
}



require('views/head.php');
$all_cat = search_all_categories($bdd);
require('views/header.php');
//importe le head et le header de la page

if (isset($_GET['page'])) {
	switch ($_GET['page']){
		case'about':
		require('controller/controller_about.php');
			break;
			//boucle qui vérifie l'existence d'un url et affiche la page relative

		case'article':
		require('controller/controller_onepost.php');
			break;

		case'articles':
		require('controller/controller_allarticles.php');
			break;
	
		case 'articles_by_author':
		require('controller/controller_articlesbyaut.php');
			break;

		case 'authors':
			require('controller/controller_searchaut.php');
			break;

		case'categories':
		require('controller/controller_postbycat.php');
		break;

		case'contact':
		require('controller/controller_contact.php');
			break;

		case'create':
			require('controller/controller_formcreatepost.php');
			break;

		case'edition':
	require('controller/controller_formeditpost.php');
			break;

		case'my_profil':
			require('controller/controller_formprofil.php');
			break;

		case'new_user':
		require('controller/controller_formnewuser.php');
			break;
	
	}
} else{
		require('controller/controller_formhome.php');
	//page de base si les autres conditions ne sont pas réalisées
	}

require('views/footer.php');

?>