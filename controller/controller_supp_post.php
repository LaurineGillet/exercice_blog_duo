<?php

if (isset($_SESSION['id']) && isset($_SESSION[level])) {
    //on vérifie si il y a une action et si c'est l'action de supprimer
    PostQuery::deleteOnePost($bdd, $_GET['id']);
    header('location:articles');

}

?>