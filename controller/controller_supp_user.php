<?php

if (isset($_SESSION['id']) && isset($_SESSION[level])) {
    delete_one_aut($bdd, $_GET['id']);
    header('location:gestion_authors');

}

?>