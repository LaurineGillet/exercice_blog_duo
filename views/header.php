<body>
<header>
	<h1>Tibo et Lolo</h1>
	<nav class="navbar navbar-expand-lg navbar-light">
  <a class="" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home">Accueil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about">A propos</a>
      </li>
        <li class="nav-item">
        <a class="nav-link " href="authors">
          Nos auteurs
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="articles" role="button" aria-haspopup="true" aria-expanded="false">
          Articles
        </a> 
        <div class="dropdown-menu">
          <a class="dropdown-item" href="articles">Ensemble des articles</a>
          <div class="dropdown-divider"></div>
<?php
foreach ($all_cat as $value) {
          echo utf8_encode('<a class="dropdown-item" href="categorie-'.$value['id'].'">'.$value['name'].'</a>');}
?>
        </div>
      </li>
    
          <li class="nav-item">
        <a class="nav-link" href="contact">Contact</a>
      </li>


<?php 
if(isset($_SESSION['id'])){ 
      echo '<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="articles" role="button" aria-haspopup="true" aria-expanded="false">
          Interface utilisateur
      </a> 
      <div class="dropdown-menu">
        <a class="dropdown-item" href="profil">Mon profil</a>
        <a class="dropdown-item" href="new-article">Créer un nouvel article</a>
      </div>
    </li>';
    }

if (isset($_SESSION['id']) && $_SESSION['level'] == 1){

      echo'<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="articles" role="button" aria-haspopup="true" aria-expanded="false">
          Interface administration
      </a> 
      <div class="dropdown-menu">
        <a class="dropdown-item" href="new_user">Créer un nouvel auteur</a>
        <a class="dropdown-item" href="gestion_authors">Gérer les auteurs</a>
        <a class="dropdown-item" href="gestion_articles">Gérer les articles</a>
      </div>
    </li>';
    }
    
?>

    </ul>
  </div>
</nav>
</header>
<main>

   