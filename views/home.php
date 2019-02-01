<div class="container">
  <div>
    <h2>Bienvenue</h2>
    <p>Vous voilà arrivez sur le Blog "Tibo et Lolo", objet d'étude et expérimentations dans le cadre de notre formation "Développeur Web - Web Mobile" effectuée via l'Aformac.<br>
    Vous trouverez sur ce blog du contenu lié aux séries télévisées.</p>
  </div>
  <div class="aside">
	  <span><img src="img/tilo.png"></span>

   <?php
   if(isset($_SESSION['id'])){
  echo 'Bonjour, vous êtes connecté';
  echo "<a href='index.php?stopsession=yes'> Se déconnecter </a>";
}

else{

 echo "<form method='POST'>",
       "<div class='form-group row'>",
          "<label for='inputEmail3' class='col-sm-2 col-form-label'></label>",
            '<div class="col-sm-10">',
              '<input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email">',
           "</div>",
        "</div>",
        '<div class="form-group row">',
          '<label for="inputPassword3" class="col-sm-2 col-form-label"></label>',
          '<div class="col-sm-10">',
            '<input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password">',
          "</div>",
       "</div>",

        '<div class="form-group row">',
           '<div class="col-sm-10">',
              '<button type="submit" class="btn btn-primary">Sign in</button>',
            "</div>",
        "</div>",
      "</form>";
}

?>
  </div>
</div>

