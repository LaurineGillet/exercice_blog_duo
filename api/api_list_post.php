<?php

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

require ('../model/connexion.php');
require ('../model/function.php');

echo json_encode(search_all_posts($bdd));
var_dump(search_all_posts($bdd) );


?>