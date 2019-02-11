
<?php
<section id="profil">	


echo "<section id='profil'>



	<h2>Profil de ".$_SESSION['firstname']." ".$_SESSION['lastname']."</h2>
	<div>
		<div class='profil_card'>
			<div>
				<h3>Mon image:</h3>
				<img src='img/".$_SESSION['img'].">
			</div>
			<div>
				<h3>Mon email:</h3>
				<p>".$_SESSION['email']."</p>
				<h3>Ma description:</h3>
				<p>".$_SESSION['description']."</p>
			</div>
			<div>
				<h3>Mes articles:</h3>
				<ul>";

if ($post_by_aut > 0) {
    foreach ($post_by_aut as $value) {
        echo utf8_encode("
            <div class='card'>
            <img src='img/".$value['img']."'class='card-img-top'>
            <div class='card-body'>
            <h3>" . $value['title']."</h3>
              <p class='card-text'>Par: ".$value['firstname']."</p>
              <p>");
        echo date("d-m-Y", strtotime($value['created_date']));
        echo "</p>
              <div class='btn-group'>
                    <button type='button' class='btn btn-sm btn-outline-secondary'><a href='post-".$value['id'].">View</a></button>'';

				<ul>';

if (isset($_SESSION['id']) == $post_by_aut > 0){
	foreach ($post_by_aut as $value)
	{echo utf8_encode('<li><a href="post-'.$value['id'].'">'.$value['title'].'</a>/<li>');}
  	}else{
  echo "<li>Je n'ai pas encore écrit d'article.</li>";

}

		<div>
			<h2>Changer mon profil:</h2>

			<form method='post' enctype='multipart/form-data' action=''>
				<input type='text' name='firstname' placeholder='Prénom'>
				<input type='text' name='lastname' placeholder='Nom'>
				<input type='email' name='email' placeholder='Email'>
				<input type='file' name='img'>
				<textarea type='text' name='description' placeholder='Description'></textarea>
				<input type='password' name='password' placeholder='Password'>
				<button type='submit' class='btn btn-sm btn-outline-secondary'> Je valide</button>
		</div>
	</div>
	</form>
 </section>";
    }
} ?>

			<form method="post" enctype="multipart/form-data" action="">
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
</section>
