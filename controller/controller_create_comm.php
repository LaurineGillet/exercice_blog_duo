<?php
if (isset($_POST['content']) && isset($_POST['author']) && isset($_POST['posts'])) {

    create_comment($bdd, $_POST['content'], $_POST['author'], $_POST['posts']);
    header('location:post-' . $_POST['posts']);
}

?>