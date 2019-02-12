<?php
if (isset($_SESSION['id'])){
$post_by_aut = PostQuery::searchPostByAut($bdd,$_GET['id']);
require('views/my_profil.php');
}
?>