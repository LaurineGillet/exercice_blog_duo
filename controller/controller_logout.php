<?php


	unset($_SESSION['id']);
	unset($_SESSION['email']);
	unset($_SESSION['password']);
	unset($_SESSION['img']);
	unset($_SESSION['firstname']);
	unset($_SESSION['level']);

	session_destroy();
//on vérifie si la session est fermée, si oui, on déconnecte l'id le mail et le mdp


?>