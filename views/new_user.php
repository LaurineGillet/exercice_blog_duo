<?php 
if (isset($_SESSION['id']) && $_SESSION['level'] == 1){
?>
<form method="post" enctype="multipart/form-data" action="index.php?action=new_user">
	<input type="text" name="firstname" placeholder="Prénom">
	<input type="text" name="lastname" placeholder="Nom">
	<input type="email" name="email" placeholder="Email">
	<input type="password" name="password" placeholder="Password">
	<input type="text" name="level" placeholder="Niveau"><br>
	<button type="submit" class='btn btn-sm btn-outline-secondary'> Je valide</button>
</form>
<?php 

}
?>

