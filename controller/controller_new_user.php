<?php


	$email = existing_email($bdd, $_POST['email']);
		if ($email){
				echo 'Email déjà utilisé';
		}else{
			create_user ($bdd, $_POST['firstname'], $_POST['lastname'], $_FILES['img'], $_POST['email'], $_POST['password'], $_POST['description'], $_POST['level']);
			echo "Enregistrement réussie";
		}




?>