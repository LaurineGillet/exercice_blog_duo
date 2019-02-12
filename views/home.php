<section>

  	  


     <?php
     if(isset($_SESSION['id'])){
      echo "<span><img src='img/".$_SESSION['img']."'></span>";
    echo "<p>Bonjour ".$_SESSION['firstname'].", vous êtes connecté </p>";
    echo "<a href='deconnexion'> Se déconnecter </a>";
  }

  else{

   echo "
   <span><img src='img/tilo.png'></span>
   <form method='POST' action='index.php?action=login'>",
         "<div class='form-group row'>",
              '<div class="col-sm-10">',
                '<input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email">',
             "</div>",
          "</div>",
          '<div class="form-group row">',
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
</section>
