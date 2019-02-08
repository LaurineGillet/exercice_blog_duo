<?php

if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['content']) && isset($_POST['id_cat']) && isset($_POST['id_authors'])
    && isset($_SESSION['id']) && isset($_SESSION[level])) {
    var_dump($_POST);
    update_one_post($bdd, $_POST['id'], $_POST['title'], $_POST['content'], $_POST['id_cat'], $_POST['id_authors']);
    echo "<script> alert('Bravo, tu as bien édité cet article');</script>";
    header('location:post-' . $_POST['id']);
}


?>