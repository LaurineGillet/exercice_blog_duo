<?php
if (isset($_SESSION['id'])){
$all_cat = search_all_categories($bdd);
			
			require('views/create.php');
}
?>