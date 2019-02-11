<?php 
if (isset($_SESSION['id']) && $_SESSION['level'] == 1){
?>
<form method="post" enctype="multipart/form-data" action="index.php?action=new_user">
	<div class="form-row">
    	<div class="col">
			<input type="text" name="firstname" class="form-control" placeholder="Prénom">
		</div>
    	<div class="col">
			<input type="text" name="lastname" class="form-control" placeholder="Nom">
		</div>
	</div>
	<div class="form-row">
		<div class="col">
			<input type="email" name="email" class="form-control" placeholder="Email">
		</div>
		<div class="col">
			<input type="password" name="password" class="form-control" placeholder="Password">
		</div>
	</div>
	<textarea type="text" name="description" placeholder="Description"></textarea>
	<div class="form-row">
    	<div class="col">
			<input type="file"  name="img" class="form-control">
		</div>
		<div class="col">
			<input type="text" name="level" class="form-control" placeholder="Niveau">
		</div>
	</div>
	<button type="submit" class='btn btn-sm btn-outline-secondary'> Je valide</button>
</form>
<?php 
}
?>