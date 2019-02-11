<?php
if (isset($_SESSION['id'])){
$post_by_aut = search_post_by_aut($bdd,$_GET['id']);
require('views/my_profil.php');
}
?>