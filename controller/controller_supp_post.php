<?php

if (isset($_SESSION['id']) && isset($_SESSION[level])) {
    //on vérifie si il y a une action et si c'est l'action de supprimer
    delete_one_post($bdd, $_GET['id']);
    header('location:articles');

}

?>